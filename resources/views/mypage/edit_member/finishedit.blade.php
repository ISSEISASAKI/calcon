@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <p>会員情報を編集しました！</p>
  <a type="submit" class="btn btn-primary" href="{{ route('mypage') }}" role="button">OK</a>
</div>
@endsection