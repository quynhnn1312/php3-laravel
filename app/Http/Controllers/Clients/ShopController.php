<?php

namespace App\Http\Controllers\Clients;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends FrontendController
{
    public function index()
    {
        $products = Product::all();
        return view('client.shop.index', compact('products'));
    }

    public function getListShop(Request $request)
    {
        $url = $request->segments()['1'];
        $arrayUrl = preg_split('/(-)/i', $url);
        if($id = array_pop($arrayUrl))
        {
            $products = Product::where([
                'cate_id' => $id,
                'status' => Product::STATUS_PUBLIC
            ])->orderBy('id','DESC')->paginate(10);
            $category = Category::find($id);
            return view('client.shop.index', compact('products','category'));
        }
        return redirect()->back();
    }

    public function singleProduct(Request $request)
    {
        $url = $request->segments()['1'];
        $arrayUrl = preg_split('/(-)/i', $url);
        if($id = array_pop($arrayUrl))
        {
            $single_product = Product::where('status',Product::STATUS_PUBLIC)->find($id);
            $cateProduct = Category::find($single_product->cate_id);
            return view('client.shop.single-product', compact('single_product','cateProduct'));
        }
        return redirect()->back();
    }
}
