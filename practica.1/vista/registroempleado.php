<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regidtro Empleado</title>
</head>
<body>
    <form action="../controlador/crlEmpleado.php" method= post>
        <label for="nombre">Nombre:</label>
        <input type="text"id="nombre"name="nombre"required>
        <hr>
        <label for="apellido1">Apellido1:</label>
        <input type="text"id="n"name="apellido1"required>
        <hr>
        <label for="apellido2">Apellido2:</label>
        <input type="text"id="apellido2"name="apellido2"required>
        <hr>
        <label for="extension">Extension:</label>
        <input type="text"id="extension"name="extension"required>
        <hr>
        <label for="email">Email:</label>
        <input type="text"id="email"name="email"required>
        <hr>
        <label for="codigo_oficina">Codigo Oficina:</label>
        <input type="text"id="codigo_oficina"name="codigo_oficina"required>
        <hr>
        <label for="codigo_jefe">Codigo Jefe:</label>
        <input type="text"id="codigo_jefe"name="codigo_jefe"required>
        <hr>
        <label for="puesto">Puesto:</label>
        <input type="text"id="puesto"name="puesto"required>
        <hr>
        <button type="submit">Registrar Empleado:</button>
    </form>
</body>
</html>