<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera de Página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header class="bg-light py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Logotipo -->
            <a href="#" class="navbar-brand">
                <img src="https://via.placeholder.com/150x50" alt="Logo" class="img-fluid">
            </a>

            <!-- Menú de navegación -->
            <nav class="d-none d-md-block">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </nav>

            <!-- Botón de acción -->
            <div>
                <a href="#" class="btn btn-primary">Iniciar Sesión</a>
            </div>

            <!-- Menú móvil -->
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        
        <!-- Menú de navegación móvil -->
        <div class="collapse d-md-none mt-3" id="mobileMenu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Servicios</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contacto</a>
                </li>
                <li class="nav-item mt-2">
                    <a href="#" class="btn btn-primary w-100">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
