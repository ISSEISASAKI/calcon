@extends('layouts.app_admin')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method = "POST" action="{{ route('genre_management.update', ['store_type_id' => $store_type_id, 'id' => $genre_id]) }}">
          @csrf
          <div class="mb-3">
            <h1 class="text-center">ジャンル名編集画面</h1>
            <label class="mt-5">ジャンル名</label>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <input type="text" name="name" class="form-control align-self-center" placeholder="Name" value="{{ $genre_name }}" required>
          </div>
          <div class="text-center mt-5">
            <button class="btn btn-primary" type="submit">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
