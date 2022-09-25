@extends('layouts.app')

@section('content')
<div class="text-center">
  <h1>商品選択画面</h1>
</div>
@if($product_managements->isEmpty())
<h1 class="font-weight-bold text-center mt-4">NO PRODUCT</h1>
@else
  <form method="POST" action="{{ route('product_management.destroy', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };" class="h2 mt-4 ml-4 mb-5">
  @csrf
  <div class="container">
    <div class="row">
      @foreach($product_managements as $product_management)
      <table class="table table-borderless text-center">
        <thead>
          <tr>
            <th style="width: 60%">
            <label><input class="mr-2" type="checkbox" name="product_id[]" value="{{ $product_management['id'] }}" required>{{ $product_management['name'] }}</label>
            </th>
            <td class="text-left">
              <a class="btn btn-secondary" href="{{ route('product_management.edit', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id, 'product_id' => $product_management['id']]) }}">編集</a>
            </td>
          </tr>
          <tr>
            <td>
              <label>{{ $product_management['price'] }}円</label>
            </td>
          </tr>
          <tr>
            <td>
              <label>{{ $product_management['calorie'] }}cal</label>
            </td>
          </tr>
          <tr>
            <td style="width: 10%">
              <input type="hidden" name="img_filename[]" value="{{ $product_management['img_filename'] }}">
              <img src="{{ Storage::url($product_management['img_filename']) }}" width="30%" class="img-thumbnail">
            </td>
          </tr>
        </thead>
      </table>
      @endforeach
    </div>
  </div>
  <div class="text-center">
      <button type="submit" class="btn btn-danger mt-5" required>削除</button>
  </div>
  </form>
  @endif

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
      <input type="number" name="price" class="form-control" placeholder="Price" value="" required>
      <label>Calorie</label>
      <input type="number" name="calorie" class="form-control" placeholder="Cal" value="" required><br>
    <div class="text-center">
      <input type="file" class="ml-5" name="img_filename" required><br>
      <button class="btn btn-primary col-5 mt-3" type="submit">商品名追加</button><br>
    </div>  
   </div>
  </div>
</div>
</form>
@endsection