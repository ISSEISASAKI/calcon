@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <p>新しい商品を追加しました！</p>

  <a type="submit" class="btn btn-primary" href="{{ route('product_management.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" role="button">OK</a>
</div>
@endsection