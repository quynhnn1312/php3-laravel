<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\RequestUpdateProduct;
use Illuminate\Http\Request;
use App\Product;
use Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $keyCate = $request->key_cate;
        $products = Product::with('category:id,cate_name');
        if(trim($keyword))
        {
            $products->where('name','like','%'.$keyword.'%' )
                     ->paginate(5)
                     ->withPath("?keyword=$keyword");
        }
        if($keyCate)
        {
            $products->where('cate_id',$request->key_cate)
                     ->paginate(5)
                     ->withPath("?keyword=$keyCate");
        }
        $products = $products->orderByDesc('id')
                             ->paginate(5);
        $cates = Category::all();
        return view('product.index', compact('cates','products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        if($request->sale != null)
        {
            $request->validate([
                'sale' => 'numeric|between:1,100',
            ],[
                'sale.between' => 'Nhập % giảm giá trong khoảng 1 -> 100 !',
            ]);
        }
        $this->insertOrUpdate($request);
        return redirect()->route('get.list.product')->with('message', 'Thêm mới sản phẩm thành công !');
    }


    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        if(empty($product))
        {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại !');
        }
        $viewData = [
            'product' => $product,
            'categories' => $categories
        ];
        return view('product.edit', $viewData);
    }

    public function update(RequestUpdateProduct $request, $id)
    {
        $this->insertOrUpdate($request, $id);

        return redirect()->route('get.list.product')->with('message', 'Cập nhật sản phẩm thành công !');;
    }

    public function insertOrUpdate($request, $id = '')
    {
        $products = new Product();
        if($id)
        {
            $products = Product::find($id);
            if(empty($products)) return redirect()->back()->with('error', 'Sản phẩm không tồn tại !');
        }
        $products->name = $request->name;
        $products->slug = Str::slug($request->name,'-');
        $products->cate_id = $request->cate_id;
        $products->price = $request->price;
        $products->sale = $request->sale;
        $products->count = $request->count;
        $products->short_desc = $request->short_desc;
        $products->detail = $request->detail;

        if($request->hasFile('image'))
        {
            $extension = $request->image->extension();
            $filename = 'products-' . uniqid() . '.' . $extension;
            $products->image = $request->image->storeAs('products', $filename, 'public');
        }
        $products->save();
    }

    public function action($action, $id)
    {
        if($action)
        {
            $product = Product::find($id);
            if(empty($product))
            {
                return redirect()->back()->with('error', 'Sản phẩm không tồn tại !');
            }
            switch ($action)
            {
                case 'delete':
                    $product->delete();
                    return redirect()->back()->with('message', 'Xóa thành công !');
                    break;
                case 'status':
                    $product->status = $product->status ? 0 : 1;
                    $product->save();
                    return redirect()->back()->with('message', 'Cập nhật thành công !');
                    break;
            }
        }
    }
}
