@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>マイページ</h1><br>
  <div class="mt-4">
    <a class="h2" href="{{ route('mypage.editmember') }}">会員情報の編集</a><br>

    <a class="h2" href="{{ route('mypage.purchasehistory') }}">購入履歴</a><br>

    <a class="h2" href="{{ route('calorie_target.index') }}">目標カロリー設定</a><br>

    <a class="h2" href="{{ route('mypage.logout') }}">ログアウト</h2>
  </div>
</div>
@endsection

