<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="user_id" content="{{ Auth::id() }}" /> --}}

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <style>
        /* *{
            background-color: #48dbfb;
        } */

    </style>
    <body>
        <div id="app">
            <app></app>
        </div>
        
    </body>
    <script src="{{ mix('js/app.js')}}"></script>
</html>