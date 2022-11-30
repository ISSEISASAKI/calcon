@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2 >コンビニ選択画面</h2>
          </div>
          <div class="card-body">
            <table class="table table-borderless">
              <tbody>
                @if($store_types->isEmpty())
                  <div class="text-center">
                    <h1>データがありません</h1>
                  </div>
                @else
                  @foreach($store_types as $store_type)
                    <tr>
                      <th style="width: 20%"></th>
                      <th style="width: 80%"></th>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{ Storage::url($store_type['img_filename']) }}" width="100%" class="img-thumbnail">
                      </td>
                      <td class="h4 text-center">
                        <a href="{{ route('genre.index', ['store_type_id' => $store_type['id']]) }}">{{ $store_type['name'] }}</a>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
            @auth
            <div class="text-center">
                <h1>本日摂取カロリー</h1>
                <h1>{{ $today_calorie }}cal</h1>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection