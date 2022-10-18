@extends('layouts.app')

@section('content')
  <div class="text-center mt-5">
    <h1>目標カロリー設定画面</h1>
  </div>
  <div class="container text-center mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      @if($calorie_check == Auth::user())
        <form method = "POST" action="{{ route('calorie_target.update') }}">
          @csrf
          <h2 class="text-center">目標カロリー</h2>
          <input type="number" name="calorie" class="form-control" min="0" value=" "><p>cal</p>
          <a type="button" class="btn btn-secondary mr-5 col-4" href="{{ route('mypage') }}" role="button">マイページへ戻る</a>
          <button class="btn btn-primary col-4" type="submit">目標カロリー登録</button>
        </form>
      @else
        <form method = "POST" action="{{ route('calorie_target.store') }}">
          @csrf
          <h2 class="text-center">目標カロリー</h2>
          <input type="number" name="calorie" class="form-control" min="0" value=" "><p>cal</p>
          <button class="btn btn-primary" type="submit">送信</button>
        </form>
      @endif
      </div>
    </div>
  </div>
@endsection