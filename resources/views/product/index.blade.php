@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  <h1>商品選択画面</h1>
  @if($products->isEmpty())
  <h2 class="text-center mt-4">データがありません</h2>
  <a type="button" class="btn btn-secondary mt-4 col-2" href="{{ route('genre.index', ['store_type_id' => $store_type_id]) }}">ジャンル選択へ戻る</a>
  @else
  <form method="POST" action="{{ route('product.finishadd', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" class="h2">
  @csrf
  @foreach($products as $product)
    <div class="form-group">
      <label><input class="mr-2" type="checkbox" name="product_id[]" value="{{ $product['id'] }}">{{ $product['name'] }}</label><br>
      <label>{{ $product['calorie'] }}cal</label><br>
      <label>{{ $product['price'] }}円</label><br>
      <img src="{{ Storage::url($product->img_filename) }}" width="25%" class="img-thumbnail">
  @endforeach
    </div>
    <a type="button" class="btn btn-secondary mt-4 mr-5 col-2" href="{{ route('genre.index', ['store_type_id' => $store_type_id]) }}">ジャンル選択へ戻る</a>
    <button type="submit" class="btn btn-primary mt-4 col-2">摂取カロリー登録</button>
  </form>
  <div class="h1 text-right mb-5">
    <p>選択cal</p>
  </div>
  @endif
</div>
@endsection