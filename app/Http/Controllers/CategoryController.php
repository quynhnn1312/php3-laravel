<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::paginate(5);

        $keyword = $request->keyword;

        if(trim($keyword))
        {
            $categories = Category::where('cate_name', 'like', '%'. $keyword . '%')->paginate(5);
            $categories->withPath("?keyword=$keyword");
        }

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->except('_token');
        $request->has('show_menu') ? $data['show_menu'] = 1 : $data['show_menu'] = -1;
        $data['slug'] = Str::slug($request->cate_name, '-');
        Category::insert($data);
        return redirect()->route('get.list.category')->with('message', 'Thêm mới danh mục thành công !');
    }

    public function edit($id)
    {
        if(empty($id)){
            return redirect()->back()->with('error', 'id danh mục không tồn tại');
        }
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        if(empty($id)){
            return redirect()->back()->with('error', 'Cập nhật không thành công');
        }
        $category = Category::find($id);
        $request->has('show_menu') ? $category->show_menu = 1 : $category->show_menu = -1;
        $category->slug = Str::slug($request->cate_name, '-');
        $category->cate_name  = $request->cate_name;
        $category->save();
        return redirect()->route('get.list.category')->with('message', 'Cập nhật danh mục thành công !');
    }

    public function delete($id)
    {
        if(empty($id))
        {
            return redirect()->back()->with('error', 'Danh mục không tồn tại !');
        }
        Category::destroy($id);
        return redirect()->back()->with('message', 'Xóa danh mục thành công !');
    }

}
