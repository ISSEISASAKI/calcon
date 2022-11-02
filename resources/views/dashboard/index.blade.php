@extends('layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2 >コンビニ選択画面</h2>
          </div>
          <div class="card-body">
            <table class="table table-borderless text-center">
              <tbody>
                @foreach($store_type_managements as $store_type_management)
                  <tr>
                    <th style="width: 20%"></th>
                    <th style="width: 60%"></th>
                    <th style="width: 20%"></th>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ Storage::url($store_type_management['img_filename']) }}" width="70%" class="img-thumbnail">
                    </td>
                    <td>
                      <a class="h4" href="{{ route('genre_management.index', ['store_type_id' => $store_type_management['id']]) }}">{{ $store_type_management['name']}}</a>
                    </td>
                    <td class="row">
                      <a class="btn btn-secondary mr-1" href="{{ route('storetype_management.edit', ['store_type_id' => $store_type_management['id']]) }}">編集</a>
                      <form action="{{ route('store_type_management.destroy', ['store_type_id' => $store_type_management['id']]) }}" method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
                        @csrf
                        <button type="submit" class="btn btn-danger">削除</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-center">
              <a type="button" class="btn btn-primary" href="{{ route('storetype_management.add') }}" role="button">コンビニ名追加</a><br>
              <a type="button" class="btn btn-primary mt-2" href="{{ route('dashboard.contact') }}" role="button">お問い合わせ内容確認</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection