<!DOCTYPE html> <html>
    <head> 
        <title>Home</title>

        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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

        <p> ESTAS EN LA VENTANA DE CONSULTAS </p>

    </body>
</html>