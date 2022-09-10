@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  @foreach($genre_managements as $genre_management)
    <div class="d-flex justify-content-center mt-4">
      <a class="h2" href="{{ route('product_management.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre_management['id']]) }}">{{ $genre_management['name'] }}</a>
      <a class="btn btn-secondary ml-5" href="{{ route('genre_management.edit', ['store_type_id' => $genre_management['id']]) }}">編集</a>
      <form action="{{ route('genre_management.destroy', ['store_type_id' => $genre_management['id']]) }}"  method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
        @csrf
         <button type="submit" class="btn btn-danger ml-1">削除</button>
      </form>
    </div>
  @endforeach
  <a type="button" class="btn btn-primary mt-5" href="{{ route('genre_management.add') }}" role="button">追加</a>
</div>
@endsection