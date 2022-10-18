@extends('layouts.app_admin')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method = "POST" action="{{ route('product_management.update', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id, 'product_id' => $product_id]) }}" enctype="multipart/form-data">
          <!--追加の時はPOST-->
          @csrf
          <div class="mb-3">
            <h1 class="text-center">商品名編集画面</h1>
            <label class="mt-5">Name</label>
            <input type="text" name="name" class="form-control align-self-center" placeholder="Name" value="{{ $product_managements['name'] }}" required>
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product_managements['price'] }}" required>
            <label>Calorie</label>
            <input type="text" name="calorie" class="form-control" placeholder="Cal" value="{{ $product_managements['calorie'] }}" required>
            <div class="text-center mt-5">
            <input type="file" class="ml-5" name="img_filename" required>
          </div>
          <div class="text-center mt-5">
            <button class="btn btn-primary" type="submit">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
