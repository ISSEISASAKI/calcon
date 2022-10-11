@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >マイページ</h2>
        </div>
        <div class="card-body">
          <table class="table table-borderless">
            <tbody class="text-center">
            <tr>
                <th><a class="h4" href="{{ route('mypage.editmember') }}">会員情報の編集</a></th>
            </tr>
            <tr>
                <th><a class="h4" href="{{ route('mypage.purchase_history') }}">購入履歴</a></th>
            </tr>
            <tr>
                <th><a class="h4" href="{{ route('calorie_target.index') }}">目標カロリー設定</a></th>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection