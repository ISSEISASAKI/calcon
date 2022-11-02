@extends('layouts.app_admin')

@section('content')
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center">お問合せ内容確認</h1>
        @if($contact_confirms->isEmpty())
          <div class="text-center font-weight-bold mt-4">
            <h1>データがありません</h1>
          </div>
        @else
        @foreach($contact_confirms as $contact_confirm)
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th style="width: 25%">お名前</th>
                <th style="width: 55%">メールアドレス</th>
                <th style="width: 20%">お問い合わせ内容</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $contact_confirm['user_id'] }}</th>
                <td>{{ $contact_confirm['email'] }}</td>
                <td><a type="button" class="btn btn-success" href="{{ route('dashboard.contact_detail', ['contact_detail' => $contact_confirm['contact'], 'contact_id' => $contact_confirm['id']]) }}">詳細</a></td>
              </tr>
            </tbody>
          </table>
        @endforeach
        @endif
        <div class="text-center mt-5">
          <a class="btn btn-secondary" href="{{ route('admin.home') }}">戻る</a>
        </div>
      </div>
    </div>
  </div>
@endsection