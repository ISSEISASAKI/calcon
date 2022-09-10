@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  @foreach($store_type_managements as $store_type_management)
    <div class="d-flex justify-content-center mt-4">
      <a class="h2" href="{{ route('genre_management.index', ['store_type_id' => $store_type_management['id']]) }}">{{ $store_type_management['name']}}</a>
      <a class="btn btn-secondary ml-5" href="{{ route('storetype_management.edit', ['store_type_id' => $store_type_management['id']]) }}">編集</a>
      <form action="{{ route('dashboard.destroy', ['store_type_id' => $store_type_management['id']]) }}" method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
      <!--onsubmitの意味を調べる-->
        @csrf
         <button type="submit" class="btn btn-danger ml-1">削除</button>
      </form>
    </div>
  @endforeach
  <a type="button" class="btn btn-primary mt-5" href="{{ route('storetype_management.add') }}" role="button">追加</a>
</div>
@endsection

