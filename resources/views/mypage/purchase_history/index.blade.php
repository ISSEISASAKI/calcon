@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-5">
  @foreach($store_types as $store_type)
      <a class="h2" href="{{ route('mypage.store_type', ['store_type_id' => $store_type['id']]) }}">{{ $store_type['name'] }}</a><br>
  @endforeach
    </div>
    <div class="col-7">
      <h2 class="mt-5">本日購入品</h2>
      @foreach($products as $product)
      <h3>{{ $product['id'] }}</h3>
      @endforeach
    </div>
  </div>
</div>
@endsection

