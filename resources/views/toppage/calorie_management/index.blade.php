@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >摂取カロリー表示画面</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped">
          <tbody>
            <tr>
              <th class="text-left">摂取カロリー</th>
              <td class="text-center">{{ $today_calorie }}cal</td>
            </tr>
            <tr>
              <th class="text-left">本日摂取カロリーあと</th>
              <td class="text-center">{{ $calorie_targets['calorie'] - $today_calorie }}cal</td>
            </tr>
            <tr>
              <th class="text-left">本日摂取カロリー</th>
              <td class="text-center">{{ $calorie_targets['calorie'] }}cal</td>
            </tr>
            <tr>
              <th class="text-left">本日合計金額</th>
              <td class="text-center">{{ $today_price }}円</td>
            </tr>
          </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection