@extends('layouts.app_admin')

@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <form method = "POST" action="{{ route('product_management.store', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="text-center">
          <h1>商品名追加画面</h1>
        </div>
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
          <button class="btn btn-primary mt-3" type="submit">商品名追加</button>
        </div>
      </form>
    </div>
  </div>
@endsection


