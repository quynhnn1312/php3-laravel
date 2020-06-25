<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCheckout;
use App\Order;
use App\Transaction;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class ShoppingCartController extends FrontendController
{
    public function listCart()
    {
        $products = \Cart::content();
        return view('client.cart.listCart',compact('products'));
    }

    public function checkout()
    {
        $products = \Cart::content();
        return view('client.cart.checkout',compact('products'));
    }
    public function addShoppingCart (Request $request, $id) {
        $product = Product::select('name','id','price','image','sale','count')->find($id);
        if(!$product) return response()->json(['error' =>'Thêm vào giỏ hàng không thành công']);

        $price = $product->price;

        if($product->sale)
        {
            $price = $price * (100 - $product->sale)/100;
        }

        if($product->count == 0)
        {
            return response()->json(['warning'=> 'Sản phẩm đã hết hàng !']);
        }

        \Cart::add([ 'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'weight' => 0,
            'price' => $price,
            'options' => [
                'image' => $product->image,
                'sale' => $product->sale ? $product->sale : null,
                'price_old' => $product->price
            ]
        ]);
        $listUnstyled = '<ul class="list-unstyled" id="listUnstyled">';
        foreach (\Cart::content() as $key => $product){
            $listUnstyled .= '<li class="single-cart-item media" id="'. $key.'">
                            <div class="shopping-cart-img mr-4">
                                <a href="#">
                                    <img class="img-fluid" alt="Cart Item" src="'. asset('storage/').'/'.$product->options->image.'">
                                    <span class="product-quantity">'. $product->qty .'</span>
                                </a>
                            </div>
                            <div class="shopping-cart-title media-body">
                                <h4><a href="#">'. $product->name .'</a></h4>
                                <p class="cart-price">'. number_format($product->price,0,',','.') .'đ</p>
                                <div class="product-attr">
                                    <span>Color: White</span>
                                    <span>Accessories: Yes</span>
                                </div>
                            </div>
                            <div class="shopping-cart-delete">
                                <a onclick="deleteCartItem(event)" href="'.route('delete.cart.item',$key) .'"><i class="ion ion-md-close"></i></a>
                            </div>
                        </li>';
        }
        $listUnstyled .= '</ul>
                        <div class="shopping-cart-total">
                            <h4>Sub-Total : <span class="totalShoppingCart">'.\Cart::subtotal(0.3).'đ</span></h4>
                            <h4>Total : <span class="totalShoppingCart">'.\Cart::subtotal(0.3).'đ</span></h4>
                        </div>
                        <div class="shopping-cart-btn">
                            <a class="default-btn" href="'.route('get.list.cart').'">view cart</a>
                            <a class="default-btn" href="'.route('get.checkout').'">checkout</a>
                        </div>';
        return response()->json(['success'=>'Thêm vào giỏ hàng thành công', 'listUnstyled' => $listUnstyled, 'count' => \Cart::count()]);
    }

    public function deleteCartItem(Request $request)
    {
        $key = $request->key;
        \Cart::remove($key);
        return response()->json(['key'=> $key,'total' => \Cart::subtotal(0.3), 'count' => \Cart::count()]);
    }

    public function updateCartItem(Request $request)
    {
        \Cart::update($request->key, $request->quantityUpdate);
        $totalProductItem = number_format($request->price*$request->quantityUpdate,0,',','.');
        return response()->json(['total' => \Cart::subtotal(0.3), 'count' => \Cart::count(), 'totalProductItem' => $totalProductItem]);
    }

    public function saveInfoShoppingCart(RequestCheckout $request)
    {
        $totalMoney = str_replace(',','', \Cart::subtotal(0,3));
        $countProduct = \Cart::count();
        $requestData = [
            'user_id' => isset(Auth::user()->id) ? Auth::user()->id : 0,
            'total' => (int)$totalMoney,
            'note' => $request->note,
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->address,
            'phone' => $request->phone,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $transactionId = Transaction::insertGetId($requestData);
        if($transactionId)
        {
            $products = \Cart::content();
            foreach ( $products as $product)
            {
                Order::insert([
                    'transaction_id' => $transactionId,
                    'product_id' => $product->id,
                    'quantity' => $product->qty,
                    'price' => $product->options->price_old,
                    'sale' => $product->options->sale ? $product->options->sale : 0,
                ]);
            }
        }
        $urlPath = public_path() . '/storage/';
        $dataMail =[
            'name' => $request->name,
            'products' => $products,
            'transactionId' => $transactionId,
            'requestData' => $requestData,
            'urlPath' => $urlPath
        ];
        $email = $request->email;
        Mail::send('client.mail',$dataMail,function ($message) use ($email,$transactionId) {

            $message->to($email);
            $message->subject("Xác nhận đơn hàng #$transactionId từ Pebona Shop");

        });
        $viewData = [
            'requestData' => $requestData,
            'products' => $products,
            'transactionId' => $transactionId,
            'countProduct' => $countProduct
        ];
        \Cart::destroy();

        return view('client.cart.thankyou',$viewData);
    }
}
