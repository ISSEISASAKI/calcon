@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  @foreach($product_alls as $product_all)
  <p>{{ $product_all }}を食べました！</p>
  @endforeach
  <a type="submit" class="btn btn-primary" href="{{ route('toppage.index') }}" role="button">OK</a>
</div>
@endsection