<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente</title>
</head>
<body>
    <form action="../controlador/ctrlCliente.php" method="post">
        <label for="nombre_cliente">Nombre Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        <hr>
        <label for="nombre_contacto">Nombre Contacto:</label>
        <input type="text" id="nombre_contacto" name="nombre_contacto" required>
        <hr>
        <label for="apellido_contacto">Apellido Contacto:</label>
        <input type="text" id="apellido_contacto" name="apellido_contacto" required>
        <hr>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <hr>
        <label for="fax">Fax:</label>
        <input type="text" id="fax" name="fax">
        <hr>
        <label for="linea_direccion1">Dirección 1:</label>
        <input type="text" id="linea_direccion1" name="linea_direccion1" required>
        <hr>
        <label for="linea_direccion2">Dirección 2:</label>
        <input type="text" id="linea_direccion2" name="linea_direccion2">
        <hr>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        <hr>
        <label for="region">Región:</label>
        <input type="text" id="region" name="region" required>
        <hr>
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required>
        <hr>
        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal">
        <hr>
        <label for="codigo_empleado_rep_ventas">Código Empleado Rep. Ventas:</label>
        <input type="number" id="codigo_empleado_rep_ventas" name="codigo_empleado_rep_ventas" required>
        <hr>
        <label for="limite_credito">Límite Crédito:</label>
        <input type="number" id="limite_credito" name="limite_credito" step="0.01" required>
        <hr>
        <button type="submit">Registrar Cliente</button>
    </form>
</body>
</html>
