
@extends('layouts.app')

@section('content')
  <div class="text-center mt-5">
      <h1>摂取カロリー</h1>
      <h2>{{ "#" }}</h2><br>
      <h1>本日摂取カロリーあと</h1>
      <h2>500cal</h2><br>
      @foreach($calorie_targets as $calorie_target)
      <h1>本日目標カロリー</h1>
      <h2>{{ $calorie_target['calorie'] }}</h2><br>
      @endforeach
      <h1>本日合計金額</h1>
      <h2>10,000円</h2>
  </div>
@endsection
