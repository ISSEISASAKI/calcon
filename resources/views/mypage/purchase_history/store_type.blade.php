@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >{{ $store_name }}購入履歴</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped">
          <tbody>
            <tr class="text-center">
              <th>日付</th>
              <th>商品</th>
              <th>カロリー</th>
            </tr>
            @foreach($totals as [$date, $name])
            <tr class="text-center">
              <td>{{ $date['date'] }}</td>
              <td>{{ $name['name'] }}</td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection