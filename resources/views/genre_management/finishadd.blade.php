@extends('layouts.app_admin')

@section('content')
  <div class="text-center mt-5">
    <p>新しいジャンルを追加しました！</p>
    <a type="submit" class="btn btn-primary" href="{{ route('genre_management.index', ['store_type_id' => $store_type_id]) }}" role="button">OK</a>
  </div>
@endsection