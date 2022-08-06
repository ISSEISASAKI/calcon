<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
   <title>管理画面 - @yield('title')</title>
   @section('script')
   @show
 </head>
 <body>
   <div class="container">
     @yield('content')
   </div>
 </body>
</html>