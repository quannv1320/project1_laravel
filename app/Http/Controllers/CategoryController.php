<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{
    public function index()
    {
        $cates = Category::all();
        return view('admin.cate.index', compact('cates'));
    }

    public function add()
    {
        return view('admin.cate.add');
    }
    
    public function saveAdd(CategoryRequest $request)
    {
        $newCate = new Category;
        $newCate->name = $request->name;
        $newCate->description = $request->description;
        $newCate->save();

        return redirect(route('cate.index'));
    }

    public function edit($id)
    {
        $oldCate = Category::find($id);
        return view('admin.cate.edit', compact('oldCate'));
    }

    public function saveEdit($id, CategoryRequest $request)
    {
        $newCate = Category::find($id);
        $newCate->name = $request->name;
        $newCate->description = $request->description;
        $newCate->save();

        return redirect(route('cate.index'));
    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect(route('cate.index'));
    }
}
