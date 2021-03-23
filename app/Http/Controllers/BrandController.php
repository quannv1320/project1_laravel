<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }
    public function add()
    {
        return view('admin.brand.add');
    }
    public function saveAdd(Request $request)
    {
        $newBrand = new Brand();
        $newBrand->name = $request->name;
        $newBrand->logo = $request->logo;
        $newBrand->description = $request->description;
        $newBrand->save();

        return redirect(route('brand.index'));
    }
    public function delete($id)
    {
        Brand::destroy($id);
        return redirect(route('brand.index'));
    }
}
