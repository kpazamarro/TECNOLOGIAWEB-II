<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Oficina</title>
</head>
<body>
    <h1>Registrar Oficina</h1>
    <form action="../controlador/ctrloficina.php" method="post">
        <label for="codigo_oficina">Código de Oficina:</label>
        <input type="text" id="codigo_oficina" name="codigo_oficina" required>
        <br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        <br>
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required>
        <br>
        <label for="region">Región:</label>
        <input type="text" id="region" name="region">
        <br>
        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br>
        <label for="linea_direccion1">Línea de Dirección 1:</label>
        <input type="text" id="linea_direccion1" name="linea_direccion1" required>
        <br>
        <label for="linea_direccion2">Línea de Dirección 2:</label>
        <input type="text" id="linea_direccion2" name="linea_direccion2" required>
        <br>
        <input type="submit" value="Registrar Oficina">
    </form>
</body>
</html>
