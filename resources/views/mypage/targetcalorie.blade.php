<!DOCTYPE html>
<!--目標カロリー設定ページ-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--スマホ用画面サイズ設定-->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>目標カロリー設定</title>
</head>

<body>
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post">
        <div class="text-center mb-3">
          <h2 class="text-center">目標カロリー</h2>
              <input type="number" class="form-control align-self-center" min="0"><p>cal</p><br>
              <a type="submit" class="btn btn-primary" href="http://127.0.0.1:8000/mypage" role="button">登録</a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>