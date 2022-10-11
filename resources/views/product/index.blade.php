@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >商品選択画面</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <tbody>
            @if($products->isEmpty())
            <div class="text-center">
              <h2>データがありません</h2>
              <a type="button" class="btn btn-secondary mt-3" href="{{ route('genre.index', ['store_type_id' => $store_type_id]) }}">ジャンル選択へ戻る</a>
            </div>
            @else
            <tr>
              <th style="width: 25%">
                商品名称
              </th>
              <th style="width: 25%">
                カロリー
              </th>
              <th style="width: 25%">
                金額
              </th>
              <th style="width: 25%">
                商品画像
              </th>
            </tr>
            <form method="POST" action="{{ route('product.finishadd', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" class="h2">
            @csrf
            @foreach($products as $product)
              <tr>
                <td>
                  <label><input class="mr-2" type="checkbox" name="product_id[]" value="{{ $product['id'] }}">{{ $product['name'] }}</label>
                </td>
                <td>
                 <label>{{ $product['calorie'] }}cal</label>
                </td>
                <td>
                  <label>{{ $product['price'] }}円</label>
                </td>
                <td>
                  <img src="{{ Storage::url($product->img_filename) }}" width="80%" class="img-thumbnail">
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
            <div class="text-center">
              <a type="button" class="btn btn-secondary mr-3" href="{{ route('genre.index', ['store_type_id' => $store_type_id]) }}">ジャンル選択へ戻る</a>
              <button type="submit" class="btn btn-primary">摂取カロリー登録</button>
            </div>
            </form>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection