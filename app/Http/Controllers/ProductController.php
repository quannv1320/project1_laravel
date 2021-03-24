<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function saveAdd(Request $request)
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






    public function delete($id)
    {
        Product::destroy($id);
        return redirect(route('pro.index'));
    }
    
}
