<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class HomeController extends Controller
{
    public function homepage()
    {
        $products = Product::all();
        $brands = Brand::all();
        return view('clients.homepage', compact('products', 'brands'));
    }

    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('clients.product-detail', compact('product'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('clients.shop', compact('products'));
    }

}
