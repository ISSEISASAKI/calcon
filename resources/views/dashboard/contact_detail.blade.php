@extends('layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2 >問い合わせ内容詳細画面</h2>
          </div>
          <div class="card-body">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td class="h4 text-center">
                    {{ $contact_details }}
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="text-center">
              <a type="button" class="btn btn-secondary" href="{{ route('dashboard.contact') }}">お問い合わせ内容確認へ戻る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection