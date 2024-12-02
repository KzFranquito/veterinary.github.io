@extends('layouts.base')

@section('contenido')


    <style>
        

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #666;
            margin-bottom: 8px;
            display: block;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .results {
            margin-top: 20px;
            text-align: left;
        }

        .video-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .video-item img {
            width: 180px;
            height: 120px;
            border-radius: 5px;
            margin-right: 15px;
        }

        .video-item a {
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .video-item a:hover {
            text-decoration: underline;
        }
    </style>
<body>
    
    <br>
    <br>
    <br>
    <div class="search-container">
        <center>
        <h1>Buscador de Videos de YouTube</h1>
        <form method="GET">
            <label for="query">Para el cuidado de tus Amigos</label>
    </center>
            <select name="query" required >
            <option value="" disabled selected>Seleccione una opción...</option>
                <option value="¿Como bañar a un perro?">¿Cómo bañar a un perro?</option>
                <option value="¿Como bañar a un gato?">¿Cómo bañar a un gato?</option>
                <option value="Alimentos nutritivos para mis mascotas">Alimentos nutritivos para mis mascotas</option>
            </select>
            <button type="submit">Buscar</button>
        </form>


        <?php
        // Configura tu clave de API de YouTube
        $apiKey = '';

        if (isset($_GET['query'])) {
            $query = htmlspecialchars($_GET['query']);
            $maxResults = 5;

            // URL de la API de YouTube para buscar videos
            $apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&q=" . urlencode($query) . "&maxResults=" . $maxResults . "&key=" . $apiKey;

            // Realiza la solicitud a la API de YouTube
            $response = file_get_contents($apiUrl);
            $videos = json_decode($response);

            // Comprueba si hay resultados
            if (!empty($videos->items)) {
                echo "<div class='results'><h2>Resultados para: " . $query . "</h2>";
                foreach ($videos->items as $video) {
                    $title = $video->snippet->title;
                    $videoId = $video->id->videoId;
                    $thumbnail = $video->snippet->thumbnails->medium->url;

                    echo "<div class='video-item'>";
                    echo "<img src='{$thumbnail}' alt='{$title}'>";
                    echo "<a href='https://www.youtube.com/watch?v={$videoId}' target='_blank'>{$title}</a>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<p>No se encontraron resultados para: " . $query . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>



@endsection


