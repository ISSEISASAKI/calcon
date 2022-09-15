@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
<form method="POST" action="{{ route('product.finishadd') }}" class="h2">
  @csrf
  @foreach($products as $product)
  <div class="form-group">
    <label><input class="mr-2" type="checkbox" name="all[]" value="{{ $product['name'] }}">{{ $product['name'] }}</label><br>
    <label><input type="hidden" name="all[]" value="{{ $product['calorie'] }}">{{ $product['calorie'] }}cal</label><br>
    <label><input type="hidden" name="all[]" value="{{ $product['price'] }}">{{ $product['price'] }}円</label><br>
    <img src="{{ asset('img/' .$product->img_filename) }}" class="img-thumbnail">
  @endforeach
  </div>
  <button type="submit" class="btn btn-primary mt-4">送信</button>
</form>
  <div class="h1 text-right mb-5">
    <p>選択cal</p>
  </div>
</div>
@endsection