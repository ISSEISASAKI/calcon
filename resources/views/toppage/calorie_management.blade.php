
@extends('layouts.app')

@section('content')
  <div class="text-center mt-5">
      <p>摂取カロリー</p>
      <h1 class="font-weight-bold">30,000cal</h1>
  </div>
  <div class="float-left text-center mt-5 ml-5">
    <p>本日摂取カロリーあと</p>
    <p>500cal</p>
  </div>
  <div class="float-right text-xenter mt-5 mr-5">
    <p>本日目標カロリー</p>
    <p>{{ $calorie_targets['calorie'] }}</p>
  </div>
  <div class="fixed-bottom text-center mb-5">
    <p>本日合計金額</p>
    <p>10,000円</p>
  </div>
@endsection
