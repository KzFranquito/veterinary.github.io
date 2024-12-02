@extends('layouts.base')

@section('contenido')
<br>
<br>
<br>
<center>
    <div class="hero">
        <h1>Entregamos a tu mascota sano y salvo</h1>
    </div>
    </center>
    <!doctype html>
<html>
<head>
    
    <style>
        /* Estilo básico para el mapa y panel */
       


    </style>
</head>
<body>
    <center>
        <div id="floating-panel">
            <b>Inicio:</b>
            <select id="start">
                <option value="16.9056038,-92.1005698">Veterinaria</option>
            </select>
            <br>
            <b>Destino:</b>
            <select id="end">
                <option value="16.9026299,-92.0961342">Angel Martinez</option>
                <option value="16.9078159,-92.085041">Leodan Hernandez</option>
                <option value="16.9047236,-92.0983957">Franco Coautiño</option>
            </select>
            <br>
            <b>Modo de Transporte:</b>
            <select id="mode">
                <option value="driving">Conduciendo</option>
                <option value="walking">Caminando</option>
                <option value="bicycling">En bicicleta</option>
            </select>
            <br>
            <button id="submit">Calcular ruta</button>
        </div>

        <iframe id="map-iframe" width="600" height="450" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
            src="">
        </iframe>
    </center>

    <script>
        function constructIframeUrl(start, end, mode) {
            const apiKey = 'AIzaSyDFXsaZETta-HRSPiNbeScnXoTLOr6Gt2U'; 
            const baseUrl = 'https://www.google.com/maps/embed/v1/directions?key=' + apiKey;
            const origin = '&origin=' + start;
            const destination = '&destination=' + end;
            const transportMode = '&mode=' + mode; 
            return baseUrl + origin + destination + transportMode;
        }

        function updateRoute() {
            const start = document.getElementById('start').value;
            const end = document.getElementById('end').value;
            const mode = document.getElementById('mode').value; 
            const iframeUrl = constructIframeUrl(start, end, mode);
            document.getElementById('map-iframe').src = iframeUrl;
        }

        document.getElementById('submit').addEventListener('click', updateRoute);
    </script>

<br>
<br>
<div class="row">
        <div class="column1">
            <div class="card">
                <h1>En {{ $datos['name'] }} el clima es:</h1>
                <p><i class="fa-solid fa-temperature-empty"></i> Temperatura: {{ $datos['main']['temp'] }}°C</p>
                <p><i class="fa-solid fa-arrow-up-from-ground-water"></i> Humedad: {{ $datos['main']['humidity'] }}%</p>
                <p><i class="fa-solid fa-fan"></i> Viento: {{ $datos['wind']['speed'] }} m/s</p>
                <p><i class="fa-solid fa-eye"></i> Visibilidad: {{ $datos['visibility'] }} m</p>
                @if (isset($datos['rain']['1h']))
                    <p><i class="fa-solid fa-cloud-showers-heavy"></i> Lluvia (última 1h): {{ $datos['rain']['1h'] }} mm</p>
                @endif
                <p><i class="fa-solid fa-cloud"></i> Nubosidad: {{ $datos['clouds']['all'] }}%</p>
            </div>
        </div>
    
    </div>
   
</body>
</html>

@endsection
