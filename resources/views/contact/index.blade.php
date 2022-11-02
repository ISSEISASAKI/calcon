@extends('layouts.app')

@section('content')
  <div class="container mt-2 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method = "GET" action="{{ route('contact.confirmation') }}">
          <div class="mb-3">
            @csrf
            <h1 class="text-center">お問合せ</h1>
          </div>
          <div class="mb-3">
            <label>メールアドレス</label><br>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
          </div>
          <div class="mb-3">
            <label>お問合せ内容</label><br>
            <textarea name="contact" rows="10" cols="20" class="form-control" placeholder="文字を入力して下さい" required>{{ old('contact') }}</textarea>
          </div>
          <div class="text-center mt-5">
            <a type="button" class="btn btn-secondary mr-5" href="{{ url('/') }}">トップへ戻る</a>
            <button class="btn btn-primary" type="submit">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection


