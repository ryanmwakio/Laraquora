<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara Quora</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('images/favi-icon.png') }}" rel="icon">


        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    </head>
    <body>
      @include('includes.navbar')

      <div class="container">
          @yield('content')
      </div>
    </body>
</html>
