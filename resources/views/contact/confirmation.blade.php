@extends('layouts.app')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method = "POST" action="{{ route('contact.store') }}">
          @csrf
          <h1 class="text-center">お問合せ内容確認</h1>
          <label>お名前</label>
          <input type="hidden" name="name" value="{{ $name }}">
          <h4>{{ $name }}</h4>
          <label>メールアドレス</label>
          <input type="hidden" name="email" value="{{ $email }}">
          <h4>{{ $email }}</h4>
          <label>お問合せ内容</label>
          <input type="hidden" name="contact" value="{{ $contact }}">
          <h4>{{ $contact }}</h4>
          <div class="text-center mt-5">
            <a type="button" class="btn btn-secondary mr-5" href="{{ route('contact.index') }}">お問い合わせ画面に戻る</a>
            <button class="btn btn-primary" type="submit">OK</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection