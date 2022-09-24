@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
<h1>ジャンル選択画面</h1>
  @foreach($genre_managements as $genre_management)
  <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col" style="width: 50%" class="text-right">
            <a class="h2" href="{{ route('product_management.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre_management['id']]) }}">{{ $genre_management['name'] }}</a>
          </th>
          <th>
            <div class="container">
              <div class="row">
                <a class="btn btn-secondary" href="{{ route('genre_management.edit', ['store_type_id' => $store_type_id, 'id' => $genre_management['id']]) }}">編集</a>
                <form action="{{ route('genre_management.destroy', ['store_type_id' =>  $store_type_id, 'id' => $genre_management['id']]) }}"  method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
                @csrf
                <button type="submit" class="btn btn-danger ml-1">削除</button>
                </form>
              </div>
            </div>
          </th>
        </tr>
      </thead>
    </table>
  @endforeach
  <a type="button" class="btn btn-primary mt-5" href="{{ route('genre_management.add', ['store_type_id' => $store_type_id]) }}" role="button">ジャンル名追加</a>
</div>
@endsection