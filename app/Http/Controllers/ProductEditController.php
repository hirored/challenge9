<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductEditController extends Controller
{
    public function index()
    {
        // Productモデルから商品データを取得
        $products = Product::all();  // すべての商品データを取得

        // ビューに products 変数を渡す
        return view('product_edit', compact('product_edit'));
    }
}
