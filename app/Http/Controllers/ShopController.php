<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
  
    public function show($slug)
    {
     $product = Product::where('slug', $slug)->firstOrFail();

     return view('shop')->with('product', $product);
    }


}
