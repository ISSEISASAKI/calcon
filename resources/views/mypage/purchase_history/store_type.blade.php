@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
<h1>{{ $store_name }}購入履歴</h1>
  @foreach($calorie_dates as $calorie_date)
    <h3>{{ $calorie_date }}</h3><br>
  @endforeach
  @foreach($products as $product)
    <h3>{{ $product['calorie'] }}cal</h3><br>
    <h3>{{ $product['price'] }}円</h3><br>
  @endforeach
  <div class="h1 text-right mb-5">
    <p>選択cal</p>
  </div>
</div>
@endsection