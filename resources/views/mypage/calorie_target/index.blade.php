@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <h1>目標カロリー設定画面</h1>
</div>
<div class="container text-center mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
    @if($calorie_targets->isEmpty())
      <form method = "POST" action="{{ route('calorie_target.store') }}">
        @csrf
          <h2 class="text-center">目標カロリー</h2>
            <input type="number" name="calorie" class="form-control" min="0" value=" "><p>cal</p>
      <button class="btn btn-primary" type="submit">送信</button>
      </form>
    @else
    @foreach($calorie_targets as $calorie_target)
      <form method = "POST" action="{{ route('calorie_target.update', ['id' => $calorie_target['id']]) }}">
        @csrf
          <h2 class="text-center">目標カロリー</h2>
            <input type="number" name="calorie" class="form-control" min="0" value="{{ $calorie_target['calorie'] }}"><p>cal</p>
      <button class="btn btn-primary" type="submit">登録</button>
      </form>
    @endforeach
    @endif
    </div>
  </div>
</div>
@endsection