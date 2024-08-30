<?php include_once "cabecera.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Cliente</h2>
        <form action="../controlador/ctrlCliente.php" method="POST">
            
            <div class="mb-3">
                <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
            </div>
            <div class="mb-3">
                <label for="nombre_contacto" class="form-label">Nombre del Contacto</label>
                <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto">
            </div>
            <div class="mb-3">
                <label for="apellido_contacto" class="form-label">Apellido del Contacto</label>
                <input type="text" class="form-control" id="apellido_contacto" name="apellido_contacto">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="fax" class="form-label">Fax</label>
                <input type="text" class="form-control" id="fax" name="fax" required>
            </div>
            <div class="mb-3">
                <label for="linea_direccion1" class="form-label">Línea Dirección 1</label>
                <input type="text" class="form-control" id="linea_direccion1" name="linea_direccion1">
            </div>
            <div class="mb-3">
                <label for="linea_direccion2" class="form-label">Línea Dirección 2</label>
                <input type="text" class="form-control" id="linea_direccion2" name="linea_direccion2">
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Región</label>
                <input type="text" class="form-control" id="region" name="region">
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
            <div class="mb-3">
                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal">
            </div>
            <div class="mb-3">
                <label for="codigo_empleado_rep_ventas" class="form-label">Código del Empleado Representante de Ventas</label>
                <input type="number" class="form-control" id="codigo_empleado_rep_ventas" name="codigo_empleado_rep_ventas">
            </div>
            <div class="mb-3">
                <label for="limite_credito" class="form-label">Límite de Crédito</label>
                <input type="number" step="0.01" class="form-control" id="limite_credito" name="limite_credito">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>