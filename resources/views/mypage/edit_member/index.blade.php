@extends('layouts.app')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">会員情報の編集</h1>
        <form method="POST" action="{{ route('mypage.edit_member_update') }}">
          @csrf
          <div class="mb-3">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <label>お名前</label><br>
            <input type="text" name="name" class="form-control align-self-center" placeholder="Name" value="" required>
          </div>
          <div class="mb-3">
            <label>メールアドレス</label><br>
            <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
          </div>
          <div class="mb-3">
            <label>パスワード</label><br>
            <input type="password" name="password" class="form-control" placeholder="Password" value="" required>
          </div>
          <div class="mb-3">
            <label>パスワード再確認</label><br>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password again" value="" required>
          </div>
          <div class="text-center mt-5">
            <a type="button" class="btn btn-secondary mr-5 col-4" href="{{ route('mypage') }}" role="button">マイページへ戻る</a>
            <button class="btn btn-primary col-4" type="submit">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
