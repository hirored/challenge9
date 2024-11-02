<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ユーザーログイン画面</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}"
    </head>
        
        
  <body>
  <h1>ユーザーログイン画面</h1>
  <div class="box">
      <h2>パスワード</h2>
      <label for="">
        <input type="text" name="password" value="パスワード">
      </label>
      
    </div>
  
  <div class="box">
    <h2>アドレス</h2>
    <input type="text" name="text" value="アドレス">
  </div>

  <div class="conteiner">
    <div class="button">
    <form action="{{ route('new_user') }}" method="get">
      <button type="submit" class="btn btn--orange btn--radius">新規登録</button>
    </div>

    <div class="conteiner">
      <div class="button">
      <form action="{{ route('product') }}" method="get">
        <button type="summit" class="btn2 btn--orange btn--radius">ログイン</button>
      </div>
</div>
</body>

</html>