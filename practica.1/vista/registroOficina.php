<?php include_once "cabecera.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Oficina</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Oficina</h2>
        <form action="../controlador/ctrlOficina.php" method="POST">

            
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" id="pais" name="pais" required>
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Región</label>
                <input type="text" class="form-control" id="region" name="region">
            </div>
            <div class="mb-3">
                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="linea_direccion1" class="form-label">Línea Dirección 1</label>
                <input type="text" class="form-control" id="linea_direccion1" name="linea_direccion1" required>
            </div>
            <div class="mb-3">
                <label for="linea_direccion2" class="form-label">Línea Dirección 2</label>
                <input type="text" class="form-control" id="linea_direccion2" name="linea_direccion2">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>