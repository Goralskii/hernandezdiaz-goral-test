<!DOCTYPE html> <html>
    <head> 
        <title>Sobre mí</title>

        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    </head> 

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="#">Mi Sitio</a>
              <div class="navbar-nav">
                <a class="nav-link" href="/">Inicio</a>
                <a class="nav-link active" href="/sobre-mi">Sobre mí</a>
                </div>
            </div>
        </nav>


        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Sobre mí</h1>
                    <p><b>Nombre:</b> Nicolas Goral</p>
                    <p><b>Edad:</b> 28 años</p>
                    <p><b>De dónde soy:</b> Goya, Corrientes, Argentina</p>
                    <p><b>Me gustaría trabajar en:</b> Desarrollo de software</p>
                    <p><b>Expectativas del curso:</b> Aprender a crear aplicaciones web</p>
                    <p><b>Hobbies:</b> Programar, fútbol y LoL</p>

                    <a href="#" class="btn btn-primary mt-3">Descargar CV</a>
                    <a href="#" class="btn btn-secondary mt-3">Contactar</a>
                </div>
            </div>
        </div>
        

        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>