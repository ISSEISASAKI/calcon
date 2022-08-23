@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action = "{{ route('dashboard.index') }}"  method = “GET”>
        @csrf
        <div class="mb-3">
          <h1 class="text-center">コンビニ追加画面</h1>
          <label class="mt-5">コンビニ名</label>
          <input id="name" type="name" name="new_store" class="form-control align-self-center" placeholder="Name">
        </div>
        <div class="text-center mt-5">
          <button class="btn btn-primary" type="submit">追加</button>

          <!--<a type="submit" class="btn btn-primary" href="{{ route('dashboard.finishadd') }}" role="button" value="送信">追加</a>-->
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


