@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post">
        <div class="mb-3">
          <h1 class="text-center">会員情報の編集</h1>
          <label>お名前</label><br>
              <input type="name" class="form-control align-self-center" placeholder="Name">
        </div>
        <div class="mb-3">
          <label>メールアドレス</label><br>
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
          <label>パスワード</label><br>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="mb-3">
          <label>パスワード再確認</label><br>
          <input type="password" class="form-control" placeholder="Confirm password again">
        </div>
        <div class="text-center mt-5">
          <a type="button" class="btn btn-secondary mr-5" href="{{ route('mypage') }}" role="button">戻る</a>
          <a type="button" class="btn btn-primary ml-5" href="{{ route('mypage') }}" role="button">編集</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
