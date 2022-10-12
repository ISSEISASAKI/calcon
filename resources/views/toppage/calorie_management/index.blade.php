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
            @if($calorie_check == Auth::user())
              <tr>
                <th class="text-left">摂取カロリー</th>
                <td class="text-center">{{ $today_calorie }}cal</td>
              </tr>
              <tr>
                <th class="text-left">本日摂取カロリーあと</th>
                @if($remaining <= -1 )
                <td class="text-center text-danger">{{ $remaining }}cal</td>
                @else
                <td class="text-center">{{ $remaining }}cal</td>
                @endif
              </tr>
              <tr>
                <th class="text-left">本日摂取カロリー</th>
                <td class="text-center">{{ $calorie['calorie'] }}cal</td>
              </tr>
              <tr>
                <th class="text-left">本日合計金額</th>
                <td class="text-center">{{ $today_price }}円</td>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
            <a type="button" class="btn btn-secondary mt-3 col-3" href="{{ route('mypage')}}">マイページへ戻る</a>
          </div>
          @else
          <div class="text-center">
            <h2>目標カロリーを設定してください</h2>
            <a type="button" class="btn btn-secondary mt-3 col-3" href="{{ route('home')}}">トップへ戻る</a>
            <a type="button" class="btn btn-primary mt-3 ml-3 col-3" href="{{ route('calorie_target.index')}}">目標カロリー設定</a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection