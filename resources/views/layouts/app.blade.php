<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara Quora</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ secure_asset('images/favi-icon.png') }}" rel="icon">




        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ secure_asset('js/tinymce/tinymce.min.js') }}"></script>
    </head>
    <body>
      @include('includes.navbar')

      <div>
          @yield('content')
      </div>

      @include('includes.footer')
    </body>
</html>
