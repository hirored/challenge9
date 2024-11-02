<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;  // Productモデルのインポート
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function index(Request $request)
    {
        return view('products.create', compact('create'));

    }

    public function store(Request $request)
    {
        // バリデーションを実行
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 新しい商品データを保存
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->comment = $request->comment;
        $product->price = $request->price;
        $product->stock = $request->stock;



        // 画像ファイルがあれば保存
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->img_path = $path;
        }

        $product->save();

        // 保存後のリダイレクト
        return redirect()->route('products.index')->with('success', '商品が登録されました。');
    }

    }



