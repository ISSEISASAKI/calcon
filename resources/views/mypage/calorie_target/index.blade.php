@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method = "POST" action="{{ route('calorie_target.store') }}">
        @csrf
        <div class="text-center mb-3">
          <h2 class="text-center">目標カロリー</h2>
              <input type="number" name="calorie" class="form-control align-self-center" min="0" value=""><p>cal</p><br>
              <button class="btn btn-primary" type="submit">登録</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection