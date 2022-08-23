@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  <div class="row justify-content-md-center mt-5">
@foreach($productmanagements as $productmanagement)
@if($store_type_id == $productmanagement['store_type_id'] && $genre_id == $productmanagement['genre_id'])
  <form method="post" action="" class="mt-4 ml-4 mb-5">
    <input class="h2 mr-2" type="checkbox" name="product[]">{{ $productmanagement['name'] }}
    <p class="h2">{{ $productmanagement['price'] }}円</p>
    <p class="h2">{{ $productmanagement['calorie'] }}cal</p>
  </form>
@endif
@endforeach
</div>
</div>
<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-xs-2">
      <label>Name</label>
      <input type="name" class="form-control" placeholder="Name">
      <label>Price</label>
      <input type="text" class="form-control" placeholder="Price">
      <label>Calorie</label>
      <input type="text" class="form-control" placeholder="Cal">
    <div class="text-center">
      <a type="file" class="btn btn-success mt-3" href="#">アップロード</a>
      <a type="submit" class="btn btn-primary col-7 mt-3" href="#">追加</a>
    </div>  
   </div>
  </div>
</div>
@endsection