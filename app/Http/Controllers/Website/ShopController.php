<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        $products = Product::paginate(15);
        
        return view('website.pages.shop',[
            'products' => $products
        ]);
    }

    public function show($id) 
    {
        $product = Product::where('id',$id)->firstOrFail();
        
        return view('website.pages.product',[
            'product' => $product
        ]);
    }
}