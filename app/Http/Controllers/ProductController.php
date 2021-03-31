<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pro.index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pro.add', compact('categories', 'brands'));
    }

    public function saveAdd(ProductRequest $request)
    {
        $newPro = new Product();
        $newPro->name = $request->name;
        $newPro->cate_id = $request->cate_id;
        $newPro->brand_id = $request->brand_id;
        $newPro->price = $request->price;
        $newPro->quantity = $request->quantity;
        $newPro->short_desc = $request->short_desc;
        $newPro->detail = $request->detail;
        //upload file
        if($request->hasFile('image')) {
            $fileName = uniqid().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $newPro->image = "storage/" . $filePath;
        }
        $newPro->save();

        return redirect(route('pro.index'));
    }

    public function edit($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $oldPro = Product::find($id);

        return view('admin.pro.edit', compact('brands', 'categories', 'oldPro'));
    }

    public function saveEdit($id, ProductRequest $request)
    {
        $newPro = Product::find($id);
        $newPro->name = $request->name;
        $newPro->cate_id = $request->cate_id;
        $newPro->brand_id = $request->brand_id;
        $newPro->price = $request->price;
        $newPro->quantity = $request->quantity;
        $newPro->short_desc = $request->short_desc;
        $newPro->detail = $request->detail;
        //upload file
        if($request->hasFile('image')) {
            $fileName = uniqid().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $newPro->image = "storage/" . $filePath;
        }
        $newPro->save();

        return redirect(route('pro.index'));
        
    }

    public function detail($id)
    {
        $product = Product::find($id);
        
        return view('admin.pro.detail', compact('product'));
    }

    public function delete($id)
    {
        Product::destroy($id);
        return redirect(route('pro.index'));
    }
    
}
