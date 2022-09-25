@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <h1>目標カロリー設定画面</h1>
</div>
<div class="container text-center mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      @foreach($calorie_targets as $calorie_target)
      <form method = "POST" action="{{ route('calorie_target.update', ['user_id' => $calorie_target['user_id']]) }}">
        @csrf
        <div class="mb-3">
          <h2 class="text-center">目標カロリー</h2>
              <input type="number" name="calorie" min="0" value="{{ $calorie_target['calorie'] }}"><p>cal</p>
      @endforeach
          <button class="btn btn-primary" type="submit">登録</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection