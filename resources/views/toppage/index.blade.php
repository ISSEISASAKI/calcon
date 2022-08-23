@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  @foreach($store_types as $store_type)
    <div class="mt-4">
        <a class="h2" href="{{ route('genre.index', ['store_type_id' => $store_type['id']]) }}">{{ $store_type['name'] }}</a>
    </div>
  @endforeach
  <h1 class="font-weight-bold mt-5">本日摂取カロリー</h1>
  <h1 class="font-weight-bold">30,000cal</h1>
</div>
@endsection