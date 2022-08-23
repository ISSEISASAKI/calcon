@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <p>新しいコンビニを追加しました！</p>
  <?php
$name = $_GET['new_store'];
echo $name;
?>
  <a type="submit" class="btn btn-primary" href="{{ route('dashboard.index') }}" role="button">OK</a>
</div>
@endsection