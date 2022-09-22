@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  @foreach($products as $product)
  <p>{{ $product['name'] }}を食べました！</p>
  @endforeach
  <a type="submit" class="btn btn-primary" href="{{ route('toppage.index') }}" role="button">OK</a>
</div>
@endsection