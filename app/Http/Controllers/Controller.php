<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

abstract class Controller
{
    public function showList() {
        // インスタンス生成
        $model = new Article();
        $articles = $model->getList();

        return view('list', ['articles' => $articles]);
    }
}
