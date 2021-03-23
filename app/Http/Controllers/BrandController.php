<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;

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

    public function saveAdd(BrandRequest $request)
    {
        $newBrand = new Brand();
        $newBrand->name = $request->name;
        $newBrand->description = $request->description;
        //upload file
        if($request->hasFile('logo')) {
            $fileName = uniqid().'_'.$request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');
            $newBrand->logo = "storage/" . $filePath;
        }

        $newBrand->save();

        return redirect(route('brand.index'));
    }

    public function edit($id)
    {
        $oldBrand = Brand::find($id);
        return view('admin.brand.edit', compact('oldBrand'));
    }

    public function saveEdit($id, BrandRequest $request)
    {
        $newBrand = Brand::find($id);
        $newBrand->name = $request->name;
        $newBrand->logo = $request->logo;
        $newBrand->description = $request->description;
        if($request->hasFile('logo')) {
            $fileName = uniqid().'_'.$request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');
            $newBrand->logo = "storage/" . $filePath;
        }
        $newBrand->save();

        return redirect(route('brand.index'));
    }
    
    public function delete($id)
    {
        Brand::destroy($id);
        return redirect(route('brand.index'));
    }
}
