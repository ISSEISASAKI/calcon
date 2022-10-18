@extends('layouts.app_admin')

@section('content')
  <div class="text-center mt-5">
    <p>ジャンル名を編集しました！</p>
    <a type="submit" class="btn btn-primary" href="{{ route('genre_management.index', ['store_type_id' => $store_type_id, 'id' => $genre_id]) }}" role="button">OK</a>
  </div>
@endsection