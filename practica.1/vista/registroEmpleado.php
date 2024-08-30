<?php include_once "cabecera.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Empleado</h2>
        <form action="../controlador/ctrlEmpleado.php" method="POST">
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido1" class="form-label">Apellido 1</label>
                <input type="text" class="form-control" id="apellido1" name="apellido1" required>
            </div>
            <div class="mb-3">
                <label for="apellido2" class="form-label">Apellido 2</label>
                <input type="text" class="form-control" id="apellido2" name="apellido2">
            </div>
            <div class="mb-3">
                <label for="extension" class="form-label">Extensión</label>
                <input type="text" class="form-control" id="extension" name="extension" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="codigo_oficina" class="form-label">Código de Oficina</label>
                <input type="number" class="form-control" id="codigo_oficina" name="codigo_oficina" required>
            </div>
            <div class="mb-3">
                <label for="codigo_jefe" class="form-label">Código de Jefe</label>
                <input type="number" class="form-control" id="codigo_jefe" name="codigo_jefe">
            </div>
            <div class="mb-3">
                <label for="puesto" class="form-label">Puesto</label>
                <input type="text" class="form-control" id="puesto" name="puesto">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>