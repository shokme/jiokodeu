<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @livewireStyles
</head>
<body>
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
