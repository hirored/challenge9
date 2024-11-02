<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductShowController extends Controller
{
    public function show($id)
    {
        $products = products::find($id);

        return view('products_show', compact('products_show'));
    }
}
