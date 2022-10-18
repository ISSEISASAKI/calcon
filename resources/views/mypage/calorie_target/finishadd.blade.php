@extends('layouts.app')

@section('content')
  <div class="text-center mt-5">
    <p>目標カロリーを設定しました！</p>
    <a type="submit" class="btn btn-primary" href="{{ route('calorie_target.index') }}" role="button">OK</a>
  </div>
@endsection