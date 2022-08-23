@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post">
        <div class="text-center mb-3">
          <h2 class="text-center">目標カロリー</h2>
              <input type="number" class="form-control align-self-center" min="0"><p>cal</p><br>
              <a type="submit" class="btn btn-primary" href="{{ route('mypage') }}" role="button">登録</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection