@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  @foreach($genremanagements as $genremanagement)
    <div class="mt-4">
      <a class="h2" href="{{ route('productmanagement.index', ['store_type_id' => $store_type_id, 'genre_id' => $genremanagement['id']]) }}">{{ $genremanagement['name'] }}</a>
    </div>
  @endforeach
</div>
@endsection