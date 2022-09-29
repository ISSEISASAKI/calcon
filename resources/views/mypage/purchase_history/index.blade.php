@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
    @foreach($store_types as $store_type)
        <a class="h2" href="{{ route('mypage.store_type', ['store_type_id' => $store_type['id']]) }}">{{ $store_type['name'] }}</a><br>
    @endforeach
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 >本日購入品</h2>
        </div>
        @if($calorie_managements->isEmpty())
        <h3 class="text-center">NO PRODUCT</h3>
        @else
        <div class="card-body">
          <table class="table table-striped">
          <tbody>
            <tr>
              <th class="text-center">コンビニ</th>
              <th class="text-center">商品</th>
            </tr>
            @foreach($store_names as $store_name)
            @foreach($products as $product)
            <tr class="text-center">
              <td>{{ $store_name['name'] }}</td>
              <td>{{ $product['name'] }}</td>
            </tr>
            @endforeach
            @endforeach
          </tbody>
         </table>
         @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

