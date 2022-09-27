
@extends('layouts.app')

@section('content')
  <div class="text-center mt-5">
    <h1>摂取カロリー表示画面</h1>
      <h2>摂取カロリー</h2>
      <h3>{{ $today_calorie }}cal</h3><br>
      <h2>本日摂取カロリーあと</h2>
      <h3>{{ $calorie_targets['calorie'] - $today_calorie }}cal</h3><br>
      <h2>本日目標カロリー</h2>
      <h3>{{ $calorie_targets['calorie'] }}cal</h3><br>
      <h2>本日合計金額</h2>
      <h3>{{ $today_price }}円</h3>
  </div>
@endsection
