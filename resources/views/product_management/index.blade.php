@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  <div class="row justify-content-md-center mt-5">
    <form method="POST" action="{{ route('product_management.destroy') }}" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };" class="mt-4 ml-4 mb-5">
      @csrf
      @foreach($product_managements as $product_management)
      <!--@if($store_type_id == $product_management['store_type_id'] && $genre_id == $product_management['genre_id'])-->
      {{ $product }}
        <label><input class="h2 mr-2" type="checkbox" name="product_id[]" value="{{ $product_management['id'] }}">{{ $product_management['name'] }}</label><br>
        <label class="h2">{{ $product_management['price'] }}円</label><br>
        <label class="h2">{{ $product_management['calorie'] }}cal</label><br>
        <img src="{{ asset('img/' .$product_management->img_filename) }}" class="img-thumbnail">
        <a class="btn btn-secondary col-5 mt-1" href="{{ route('product_management.edit', ['product_id' => $product_management['id']]) }}">編集</a><br>
        <!--できたらjavascriptで削除ボタンを下に-->
      @endif
      @endforeach
      <button type="submit" class="btn btn-danger col-5 mt-1">削除</button>
    </form>
  </div>
</div>
<form method = "POST" action="{{ route('product_management.store') }}">
@csrf
<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-xs-1">
      <input type="hidden" name="store_type_id" class="form-control" placeholder="ConviniName" value="{{ $store_type_id }}">
      <input type="hidden" name="genre_id" class="form-control" placeholder="Genre" value="{{ $genre_id }}">
      <label>Name</label>
      <input type="name" name="name" class="form-control" placeholder="Name" value="">
      <label>Price</label>
      <input type="text" name="price" class="form-control" placeholder="Price" value="">
      <label>Calorie</label>
      <input type="text" name="calorie" class="form-control" placeholder="Cal" value=""><br>
    <div class="text-center">
      <input type="file" class="ml-5" name="img_filename"><br>
      <button class="btn btn-primary col-5 mt-3" type="submit">追加</button><br>
    </div>  
   </div>
  </div>
</div>
</form>
@endsection