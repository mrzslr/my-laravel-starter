<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div >
            <h1 style="text-align:center">{{ config('app.name') }}</h1>
            <h1>لاراول استارتر من</h1>
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('js/semantic.min.js') }}" rel="stylesheet">
    </body>
    </html>