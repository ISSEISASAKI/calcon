@extends('layouts.app_admin')

@section('content')
<div class="text-center mt-5">
  <p>新しいコンビニを追加しました！</p>
  <a type="submit" class="btn btn-primary" href="{{ route('admin.home') }}" role="button">OK</a>
</div>
@endsection