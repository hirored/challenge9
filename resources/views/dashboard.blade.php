<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
  <title>商品一覧画面</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
  
  <h1>商品一覧画面</h1>

  <div class="search-container">
      <input type="text" placeholder="キーワード検索">
      <select>
          <option value="">メーカ名検索</option>
          <option value="メーカーA">メーカーA</option>
          <option value="メーカーB">メーカーB</option>
          <option value="メーカーC">メーカーC</option>
      </select>
      <!-- 新規登録画面ボタン。ログインユーザーのみ表示 -->
      @auth
        <button class="new-register-btn">新規登録画面</button>
      @endauth
      
  </div>

  <div class="product-table">

  <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>商品画像</th>
                <th>価格</th>
                <th>在庫数</th>
                <th>メーカー名</th>
                <th>詳細</th>
                <th>削除</th>
            </tr>
        </thead>
        
      <!-- 商品があるかチェック -->
      @if($products->isEmpty())
          <p>商品が見つかりませんでした。</p>
      @else
      <!-- 商品リストを動的に生成する部分 -->
      @foreach ($products as $product)
    <div class="product-card">
        <div class="product-info">
            <strong>ID:</strong> {{ $product->id }}
        </div>
        <img src="{{ $product->image_url }}" alt="商品画像">
        <div class="product-info">
            <strong>商品名:</strong> {{ $product->name }}
        </div>
        <div class="product-info">
            <strong>価格:</strong> ¥{{ number_format($product->price) }}
        </div>
        <div class="product-info">
            <strong>在庫数:</strong> {{ $product->stock }}
        </div>
        <div class="product-info">
            <strong>メーカ名:</strong> {{ $product->manufacturer }}
        </div>
        <div class="button-container">
            <button class="detail-btn">詳細</button>
            @auth
                <button class="delete-btn">削除</button>
            @endauth
        </div>
    </div>
    @endforeach
    @endif
</div>

</body>
</html>
