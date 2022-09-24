@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
<h1>ジャンル選択画面</h1>
@if($genres->isEmpty())
  <h1 class="font-weight-bold mt-4">NO GENRE</h1>
@else
  @foreach($genres as $genre)
    <div class="mt-4">
      <a class="h2" href="{{ route('product.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre['id']]) }}">{{ $genre['name'] }}</a>
    </div>
  @endforeach
  @endif
</div>
@endsection