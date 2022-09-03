@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  <div class="row justify-content-md-center mt-5">
@foreach($product_managements as $product_management)
@if($store_type_id == $product_management['store_type_id'] && $genre_id == $product_management['genre_id'])
  <form method="post" action="" class="mt-4 ml-4 mb-5">
    <input class="h2 mr-2" type="checkbox" name="product[]">{{ $product_management['name'] }}
    <p class="h2">{{ $product_management['price'] }}円</p>
    <p class="h2">{{ $product_management['calorie'] }}cal</p>
    <img src="{{ asset('img/ .$product_management->img_filename') }}" class="img-thumbnail">
  </form>
@endif
@endforeach
</div>
</div>
<form method = "POST" action="{{ route('product_management.store') }}">
@csrf
<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-xs-1">
      <label>ConviniName</label>
      <input type="name" name="store_type_id" class="form-control" placeholder="ConviniName" value="">
      <label>Genre</label>
      <input type="name" name="genre_id" class="form-control" placeholder="Genre" value="">
      <label>Name</label>
      <input type="name" name="name" class="form-control" placeholder="Name" value="">
      <label>Price</label>
      <input type="text" name="price" class="form-control" placeholder="Price" value="">
      <label>Calorie</label>
      <input type="text" name="calorie" class="form-control" placeholder="Cal" value=""><br>
    <div class="text-center">
      <input type="file" class="ml-5" name="img_filename"><br>
      <button class="btn btn-primary col-5 mt-3" type="submit">追加</button>
    </div>  
   </div>
  </div>
</div>
</form>
@endsection