@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post">
        <div class="mb-3">
          <h1 class="text-center">お問合せ</h1>
          <label>お名前</label><br>
              <input type="name" class="form-control align-self-center" placeholder="Name">
        </div>
        <div class="mb-3">
          <label>メールアドレス</label><br>
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
          <label>お問合せ内容</label><br>
          <textarea rows="10" cols="20" class="form-control" placeholder="文字を入力して下さい"></textarea>
        </div>
        <div class="text-center mt-5">
          <a type="button" class="btn btn-secondary mr-5">戻る</a>
          <a type="submit" class="btn btn-primary ml-5" href="{{ route('contacts.index') }}" role="button">送信</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


