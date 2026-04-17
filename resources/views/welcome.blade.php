<!DOCTYPE html> <html>
    <head> 
        <title>Home</title>

        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

        <style>
        /* Un poquito de estilo para que el carrusel no sea gigante */
        .carousel-item img {
            height: 500px;
            width: 500px;
            object-fit: contain; /* Esto hace que la imagen quede en tamaño natural */
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5); /* Fondo oscuro para que se lea el texto */
            border-radius: 5px;
            padding: 10px;
            bottom: 10%;
        }
        </style>

    </head> 

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('Assets/logo.jpeg') }}" alt="Aura Store" width="45" class="d-inline-block align-text-top me-2">
                    Aura Store
                </a>
              <div class="navbar-nav">
                <a class="nav-link active" href="/quienes-somos">Quiénes somos</a>
                <a class="nav-link active" href="/comercializacion">Comercialización</a>
                <a class="nav-link active" href="/catalogo">Catalogo</a>
                <a class="nav-link active" href="/contacto">Contacto</a>
                <a class="nav-link active" href="/consultas">Consultas</a>
                <a class="nav-link active" href="/terminos-y-condiciones">Términos y condiciones</a>
                <a class="nav-link active" href="/sobre-mi">Sobre mí</a>
                </div>
            </div>
        </nav>

        <div id="sliderPrincipal" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <!-- Aquí van las imágenes del carrusel -->
                <div class="carousel-item active">
                    <img src="{{ asset('Assets/Camisetas/Argentina.jpeg') }}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h1>¡SE VIENE EL MUNDIAL 2026!</h1>
                        <button class="btn btn-primary btn-lg">Ver más</button>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('Assets/Camisetas/España.jpeg') }}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h1>EDICIÓN EUROPA</h1>
                        <button class="btn btn-primary btn-lg">Ver más</button>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('Assets/Camisetas/Italia.jpeg') }}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h1>EDICIÓN EUROPA</h1>
                        <button class="btn btn-primary btn-lg">Ver más</button>
                    </div>
                </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#sliderPrincipal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderPrincipal" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>