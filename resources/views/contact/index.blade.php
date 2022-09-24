@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
    <form method = "POST" action="{{ route('contact.confirmation') }}">
        <div class="mb-3">
        @csrf
          <h1 class="text-center">お問合せ</h1>
          <label>お名前</label><br>
          <input type="name" name="name" class="form-control align-self-center" placeholder="Name" value="" required>
        </div>
        <div class="mb-3">
          <label>メールアドレス</label><br>
          <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
        </div>
        <div class="mb-3">
          <label>お問合せ内容</label><br>
          <textarea name="contact" rows="10" cols="20" class="form-control" placeholder="文字を入力して下さい" value="" required></textarea>
        </div>
        <div class="text-center mt-5">
          <a type="button" class="btn btn-secondary mr-5" onClick="history.back()">戻る</a>
          <button class="btn btn-primary" type="submit">送信</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


