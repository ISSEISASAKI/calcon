@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >ジャンル選択画面</h2>
        </div>
        <div class="card-body">
          <table class="table table-borderless text-center">
            <tbody>
              @foreach($genre_managements as $genre_management)
                <tr>
                  <th style="width: 70%"></th>
                  <th style="width: 30%"></th>
                </tr>
                <tr>
                  <td>
                    <a class="h4" href="{{ route('product_management.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre_management['id']]) }}">{{ $genre_management['name'] }}</a>
                  </td>
                  <td class="row">
                    <a class="btn btn-secondary mr-1" href="{{ route('genre_management.edit', ['store_type_id' => $store_type_id, 'id' => $genre_management['id']]) }}">編集</a>
                    <form action="{{ route('genre_management.destroy', ['store_type_id' =>  $store_type_id, 'id' => $genre_management['id']]) }}"  method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
                      @csrf
                      <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            <a type="button" class="btn btn-primary" href="{{ route('genre_management.add', ['store_type_id' => $store_type_id]) }}" role="button">ジャンル名追加</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection