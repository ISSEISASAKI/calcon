@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  @foreach($products as $product)
  <p>{{ $product['name'] }}を食べました！</p>
  @endforeach
  <a type="submit" class="btn btn-primary" href="{{ route('product.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre_id]) }}" role="button">OK</a>
</div>
@endsection