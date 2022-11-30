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
            <table class="table table-borderless">
              <tbody>
                <p>コンビニ名：{{ $store_name }}</p>
                @if($genres->isEmpty())
                  <div class="text-center">
                    <h1>データがありません</h1>
                  </div>
                @else
                  @foreach($genres as $genre)
                    <tr>
                      <td class="h4 text-center">
                        <a href="{{ route('product.index', ['store_type_id' => $store_type_id, 'genre_id' => $genre['id']]) }}">{{ $genre['name'] }}</a>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
            <div class="text-center">
              <a type="button" class="btn btn-secondary" href="{{ route('home') }}">トップへ戻る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection