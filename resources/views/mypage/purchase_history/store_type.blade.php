@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >{{ $store_name }}購入履歴</h2>
        </div>
        @if($calorie_managements->isEmpty())
        <h3 class="text-center">データがありません</h3>
        @else
        <div class="card-body">
          <table class="table table-striped">
          <tbody>
            <tr class="text-center">
              <th>日付</th>
              <th>商品</th>
              <th>カロリー</th>
            </tr>
            @foreach($totals as $item)
            <tr class="text-center">
              <td>{{ $item[0]['date'] }}</td>
              <td>{{ $item[1]['name'] }}</td>
              <td>{{ $item[1]['calorie'] }}</td>
            </tr>
            @endforeach
          </tbody>
          </table>
        @endif
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
      <a type="button" class="btn btn-secondary mt-5" href="{{ route('mypage') }}" role="button">マイページへ戻る</a>
    </div>
</div>
@endsection