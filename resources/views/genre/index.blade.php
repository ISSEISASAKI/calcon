@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
<h1>ジャンル選択画面</h1>
  @foreach($genres as $genre)
    <div class="mt-4">
      <a class="h2" href="{{ route('product.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre['id']]) }}">{{ $genre['name'] }}</a>
    </div>
  @endforeach
</div>
@endsection