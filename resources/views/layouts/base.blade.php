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
<body class="bg-gray-50">
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>
<!-- Fathom - simple website analytics - https://github.com/usefathom/fathom -->
<script>
    (function(f, a, t, h, o, m){
        a[h]=a[h]||function(){
            (a[h].q=a[h].q||[]).push(arguments)
        };
        o=f.createElement('script'),
            m=f.getElementsByTagName('script')[0];
        o.async=1; o.src=t; o.id='fathom-script';
        m.parentNode.insertBefore(o,m)
    })(document, window, '//localhost:8888/tracker.js', 'fathom');
    fathom('set', 'siteId', 'FCIHE');
    fathom('trackPageview');
</script>
<!-- / Fathom -->
@livewireScripts
</body>
</html>
