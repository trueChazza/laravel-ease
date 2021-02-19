<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('ease.name', 'Ease') }}</title>
    </head>
    <body>
        <div id="app"></div>

        <script type="module" src="{{ config('ease.url') }}/src/main.js"></script>
    </body>
</html>
