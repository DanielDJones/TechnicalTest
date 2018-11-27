<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Title Loads set name or falls back to TechnicalTest -->
        <title>{{config("app.name", "TechnicalTest")}}</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        @include("include/navbar")

        <div class="container">
            @yield("content")
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
