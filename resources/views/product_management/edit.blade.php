@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method = "POST" action="{{ route('product_management.update', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}">
        <!--追加の時はPOST-->
        @csrf
        <div class="mb-3">
          <h1 class="text-center">商品名編集画面</h1>
          <label class="mt-5">商品名</label>
          <input type="text" name="name" class="form-control align-self-center" placeholder="Name" value="">
        </div>
        <div class="text-center mt-5">
          <button class="btn btn-primary" type="submit">追加</button>

   
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
