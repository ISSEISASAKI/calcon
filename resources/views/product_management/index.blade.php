@extends('layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h2 >商品選択画面</h2>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tbody>
                <p>コンビニ名：{{ $store_name }}</p>
                <p>ジャンル名：{{ $genre_name }}</p>
                @if($product_managements->isEmpty())
                  <div class="text-center">
                    <h1>データがありません</h1>
                  </div>
                @else
                  <tr>
                    <th style="width: 20%">商品名称</th>
                    <th style="width: 20%">金額</th>
                    <th style="width: 20%">カロリー</th>
                    <th style="width: 20%">商品画像</th>
                    <th style="width: 20%"></th>
                  </tr>
                  @foreach($product_managements as $product_management)
                    <tr>
                      <td>
                        <label>{{ $product_management['name'] }}</label>
                      </td>
                      <td>
                        <label>{{ $product_management['price'] }}円</label>
                      </td>
                      <td>
                        <label>{{ $product_management['calorie'] }}cal</label>
                      </td>
                      <td style="width: 10%">
                        <img src="{{ Storage::url($product_management['img_filename']) }}" width="80%" class="img-thumbnail">
                      </td>
                      <td class="row">
                        <a class="btn btn-secondary mr-2" href="{{ route('product_management.edit', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id, 'product_id' => $product_management['id']]) }}">編集</a>
                        <form method="POST" action="{{ route('product_management.destroy', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id, 'product_id' => $product_management['id'], 'img_filename' => $product_management['img_filename']]) }}" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
                          @csrf
                          <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @endif
                </tbody>
              </table>
              <div class="text-center">
                <a type="button" class="btn btn-secondary mr-3" href="{{ route('genre_management.index', ['store_type_id' => $store_type_id]) }}">ジャンル選択へ戻る</a>
                <a type="button" class="btn btn-primary col-2" href="{{ route('product_management.add', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" role="button">商品名追加</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection