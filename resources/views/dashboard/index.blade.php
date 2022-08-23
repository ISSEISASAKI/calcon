@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  @foreach($store_type_managements as $store_type_management)
    <div class="mt-4">
      <a class="h2" href="{{ route('genremanagement.index', ['store_type_id' => $store_type_management['id']]) }}">{{ $store_type_management['name'], $name}}</a>
      <a type="button" class="btn btn-secondary ml-5" href="#" role="button">編集</a>
      <a type="button" class="btn btn-danger" href="#" role="button">削除</a><br>
    </div>
  @endforeach
  <a type="button" class="btn btn-primary mt-5" href="{{ route('dashboard.add') }}" role="button">追加</a>
</div>
@endsection