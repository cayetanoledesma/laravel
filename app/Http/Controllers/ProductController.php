<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
 
         $datos['products'] = Product::all();
 
        return view('products.index', $datos);
    }
}
