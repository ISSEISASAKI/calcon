@extends('layouts.app')

@section('content')
<div class="text-center">
  <h1>商品選択画面</h1>
</div>
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('product_management.destroy', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };" class="h2 mt-4 ml-4 mb-5">
    <div class="form-group">
      @csrf
      @foreach($product_managements as $product_management)
        <label><input class="mr-2" type="checkbox" name="product_id[]" value="{{ $product_management['id'] }}">{{ $product_management['name'] }}</label><br>
        <input type="hidden" name="img_filename" value="{{ $product_management['img_filename'] }}">
        <label>{{ $product_management['price'] }}円</label><br>
        <label>{{ $product_management['calorie'] }}cal</label><br>
        <img src="{{ Storage::url($product_management['img_filename']) }}" width="25%" class="img-thumbnail"><br>
        <a class="btn btn-secondary mt-1" href="{{ route('product_management.edit', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id, 'product_id' => $product_management['id']]) }}">編集</a><br>
        <!--できたらjavascriptで削除ボタンを下に-->
      @endforeach
    </div>
      <button type="submit" class="btn btn-danger mt-1" required>削除</button>
    </form>
  </div>
</div>

<form method = "POST" action="{{ route('product_management.store', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" enctype="multipart/form-data">
@csrf
<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-xs-1">
      <input type="hidden" name="store_type_id" value="{{ $store_type_id }}">
      <input type="hidden" name="genre_id" value="{{ $genre_id }}">
      <label>Name</label>
      <input type="name" name="name" class="form-control" placeholder="Name" value="" required>
      <label>Price</label>
      <input type="text" name="price" class="form-control" placeholder="Price" value="" required>
      <label>Calorie</label>
      <input type="text" name="calorie" class="form-control" placeholder="Cal" value="" required><br>
    <div class="text-center">
      <input type="file" class="ml-5" name="img_filename" required><br>
      <button class="btn btn-primary col-5 mt-3" type="submit">商品名追加</button><br>
    </div>  
   </div>
  </div>
</div>
</form>
@endsection