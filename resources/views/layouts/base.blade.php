<html>
    <head>
        <title>Veterinaria</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <script type="module" src="{{asset('js/jquery.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Pastelería</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/n">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/integrantes">Integrantes del Equipo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clientes">Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mascotas">Mascotas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="vacunas">Vacunas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/entrega">Entrega de tu mascota</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/cuidado">Cuidado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/twitter">Twitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/personal">Entrada P.</a>
                  </li>
                </ul>
                
              </div>
            </div>
        </nav>

        @yield('contenido')

        < <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 ProgramadoresUTS. Todos los derechos reservados.</p>
            <p><a href="https://www.facebook.com/veterinaria.mascota.feliz.2024" target="_blank">Nuestra pagina de Facebook</a>
        </div>
    </footer>
    </body>
</html>