<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <style>
  #map {
    height: 100%;
    width: 100%;
    position: absolute;
  }
  html,body{margin: 0; padding: 0}
</style>
  @livewireStyles
</head>
<body>
<div class="flex mb-4">
    @yield('content')
    <div class="w-5/6">
        <x-map />
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@yield('scripts')
@livewireScripts
<script>
    let map = L.map('map', { center: [50.85045, 4.34878], zoom: 9});
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    L.marker([50.85045, 4.34878]).addTo(map);

    function toMap(geojson) {
        console.log(JSON.parse(geojson));
        L.geoJson(JSON.parse(geojson)).addTo(map)
    }

    window.livewire.on('selectsearch', geojson => {
        toMap(geojson)
    });
</script>
</body>
</html>
