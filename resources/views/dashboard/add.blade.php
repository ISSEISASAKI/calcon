<!DOCTYPE html>
<!--コンビニ追加画面-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--スマホ用画面サイズ設定-->

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post">
        <div class="mb-3">
          <h1 class="text-center">コンビニ追加画面</h1>
          <label class="mt-5">コンビニ名</label>
          <input type="name" class="form-control align-self-center" placeholder="Name">
        </div>
        <div class="text-center mt-5">
          <a type="submit" class="btn btn-primary" href="http://127.0.0.1:8000/dashboard/finishadd" role="button">追加</a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>


