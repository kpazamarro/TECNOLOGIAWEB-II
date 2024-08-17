<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Persona</title>
</head>
<body>
    <form action="../controlador/crlPersona.php"method="post">
        <label for="nombre">Nombre:</label>
        <input type="text"id="nombres"name="nombres">
        <hr>
        <label for="papellido">Primer Apellido</label>
        <input type="text"name="papellido"id="papellido">
        <hr>
        <label for="sapellido">Segundo Apellido</label>
        <input type="text"name="sapellido"id="sapellido">
        <hr>
        <button type=submit">Rgistrar Persona</button>
    </form>    
</body>
</html>