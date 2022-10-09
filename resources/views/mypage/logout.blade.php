@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <p>ログアウトしました！</p>
  <a type="button" class="btn btn-primary" href="{{ route('mypage') }}" role="button">OK</a>
</div>
@endsection