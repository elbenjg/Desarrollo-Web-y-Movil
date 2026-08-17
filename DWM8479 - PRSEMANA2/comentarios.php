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
                        <a class="nav-link" href="index.php" style="color: #4A7CFF">Inicio</a>
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
        <h1 class="display-4 fw-bold">Comentarios de la página</h1>
        <p class="lead" style="color: #61F2F5;">Aquí puedes hacer comentarios respecto a la página.</p>
        
    </header>

    <main class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="shadow" style="background-color: #07176E; padding: 40px; border-radius: 8px;">
                        <form action="#" method="POST">
                            
                            <div class="mb-4">
                                <label for="email" class="form-label text-white" style="font-weight: 500; font-size: 18px;">
                                    Email:
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="Escribe aquí tu correo" style="border-radius: 5px; padding: 12px; border: none;">
                            </div>
                            
                            <div class="mb-4">
                                <label for="comentarios" class="form-label text-white" style="font-weight: 500; font-size: 18px;">
                                    Comentarios
                                </label>
                                <textarea class="form-control" id="comentarios" rows="5" placeholder="Escribe aquí tu comentario" style="border-radius: 5px; padding: 12px; border: none;"></textarea>
                            </div>
                            
                            <div class="d-flex align-items-center gap-3">
                                <button type="submit" class="btn text-white fw-bold px-4" style="background-color: #00BFFF; border: none; border-radius: 4px;">
                                    Enviar
                                </button>

                                <a href="index.php" style="color: #00BFFF; margin-left: 20px; font-size: 18px; text-decoration: underline;">
                                    Volver
                                </a>
                            </div>
                    
                        </form>
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
        