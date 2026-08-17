<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #1A41C9; color: white;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #07176E;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://static.wikitide.net/nicosnextbotswiki/7/74/Nextbot_steamhappy.png" alt="Logo" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php" style="color: #FF0033 !important;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caracteristicas.php" style= "color: #4A7CFF;">Características</a>
                    </li>
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style= "color: #4A7CFF;">Contacto</a>
                        <ul class="dropdown-menu" style= "background-color: #07176E !important;">
                            <li><a class="dropdown-item" href="contactoed.php" style="color: #4A7CFF;"> Correo Educacional</a></li> 
                            <li><a class="dropdown-item" href="contactoper.php" style="color: #4A7CFF"> Correo Personal</a></li>
                        </ul>    
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn fw-bold" style= "color: #FF0033; border: 2px solid #FF0033; background-color: transparent;" data-bs-toggle="modal" data-bs-target="#loginModal"> 
                            Acceder para comentar
                        </button>
                    </li>
                </ul>    
            </div>
        </div>
    </nav>

    <!-- Encabezado / Hero Section -->
    <header class="container mt-5 text-center">
        <h1 class="display-4 fw-bold">Bienvenido a mi página</h1>
        <p class="lead" style="color: #61F2F5;">Esta es mi entrega para el PR de la semana 2.</p>
        <button type="button" class="btn btn-lg mt-3 fw-bold shadow" style="color: #61F2F5; border: 2px solid #61F2F5; background-color: transparent;" data-bs-toggle="modal" data-bs-target="#myModal">
            Info. del estudiante
        </button>
    </header>

    <!-- Container -->
    <main class="container mt-5">
        <div class="row">
            
            <!-- Tarjeta 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">Ramo </h3>
                        <p class="card-text text-muted">Desarrollo Web y Móvil</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">NRC</h3>
                        <p class="card-text text-muted">8479</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">Profesor</h3>
                        <p class="card-text text-muted">Ernesto Vivanco</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5" style="background-color: #07176E; color: #61F2F5;">
        <div class="container">
            <p class="mb-0">&copy; Agosto 2026 PR Semana 2.</p>
        </div>
    </footer>
   <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="miModalLabel">Detalles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tarea desarrollada por: <br> Benjamín Araya <br> RUT: 21.924.875-K. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow" style="border-radius: 8px;">

                <div class="modal-header border-0 pb-0 mt-2">
                    <h4 class="modal-title text-dark" id="loginModalLabel">
                        Autentificación
                    </h4>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body text-dark pt-3">
                    <form>

                        <div class="mb-4">
                            <label for="correoInput" class="form-label text-muted mb-1">
                                Correo:
                            </label>
                            <input type="email" class="form-control border-0 shadow-none" id="correoInput" placeholder="Escribe tu correo" style="background-color: #fcfcfc;">
                        </div>

                        <div class="mb-3">
                            <label for="passInput" class="form-label text-muted mb-1">
                                Contraseña:
                            </label>
                            <input type="password" class="form-control border-0 shadow-none" id="passInput" placeholder="Escribe tu contraseña" style="background-color: #fcfcfc;">
                        </div>

                        <div class="mb-4 form-check mt-3">
                            <input type="checkbox" class="form-check-input shadow-none" id="rememberCheck" style="border-color: #ccc;">
                            <label class="form-check-label text-muted" for="rememberCheck">
                               Recuerdame
                            </label>
                        </div>

                        <a href="comentarios.php" class="btn fw-bold px-4 mb-2" style="background-color: #00BFFF; color: white; border-radius: 6px; text-decoration: none;">Login</a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>