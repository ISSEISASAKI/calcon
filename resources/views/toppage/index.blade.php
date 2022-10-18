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
                @foreach($store_types as $store_type)
                  <tr>
                    <td class="h4 text-center"><a href="{{ route('genre.index', ['store_type_id' => $store_type['id']]) }}">{{ $store_type['name'] }}</a></td>
                  </tr>
                @endforeach
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