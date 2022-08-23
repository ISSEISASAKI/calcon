@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
@foreach($products as $product)
@if($store_type_id == $product['store_type_id'] && $genre_id == $product['genre_id'])
  <form method="post" action="" class="h3 mt-4">
    <p>{{ $product['name'] }}</p>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="cal[]" value="{{ $product['calorie'] }}" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
        {{ $product['calorie'] }}cal
      <p class="mt-2">{{ $product['price'] }}円</p>
    </label>
  </div>
</form>
@endif
@endforeach
  <a type="submit" class="btn btn-primary mt-4" href="{{ route('contacts.index') }}" role="button">送信</a>
  <div class="h1 text-right mb-5">
    <p>選択cal</p>
  </div>
</div>
@endsection