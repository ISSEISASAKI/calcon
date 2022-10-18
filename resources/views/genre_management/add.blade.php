@extends('layouts.app_admin')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method = "POST" action="{{ route('genre_management.store', ['store_type_id' => $store_type_id]) }}">
          @csrf
          <div class="mb-3">
            <h1 class="text-center">ジャンル名追加画面</h1>
            <label class="mt-5">ジャンル名</label>
            <input type="name" name="name" class="form-control align-self-center" placeholder="Name" value="" required>
          </div>
          <div class="text-center mt-5">
            <button class="btn btn-primary" type="submit">追加</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection


