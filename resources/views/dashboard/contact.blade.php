@extends('layouts.app_admin')

@section('content')
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center">お問合せ内容確認</h1>
      @foreach($contact_confirms as $contact_confirm)
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">お名前</th>
            <th scope="col">メールアドレス</th>
            <th scope="col">お問い合わせ内容</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $contact_confirm['name'] }}</th>
            <td>{{ $contact_confirm['email'] }}</td>
            <td>{{ $contact_confirm['contact'] }}</td>
          </tr>
        </tbody>
      </table>
      @endforeach
      <div class="text-center mt-5">
        <a class="btn btn-secondary" href="{{ route('admin.home') }}">戻る</a>
      </div>
    </div>
  </div>
</div>
@endsection