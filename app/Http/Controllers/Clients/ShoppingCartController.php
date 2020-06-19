<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
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
                'sale' => $product->sale,
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

}
