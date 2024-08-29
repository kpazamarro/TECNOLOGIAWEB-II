<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Pedido</title>
</head>
<body>
    <form action="../controlador/ctrlPedido.php" method="post">
        <label for="fecha_pedido">Fecha Pedido:</label>
        <input type="date" id="fecha_pedido" name="fecha_pedido" required>
        <hr>
        <label for="fecha_esperada">Fecha Esperada:</label>
        <input type="date" id="fecha_esperada" name="fecha_esperada" required>
        <hr>
        <label for="fecha_entrega">Fecha Entrega:</label>
        <input type="date" id="fecha_entrega" name="fecha_entrega" required>
        <hr>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>
        <hr>
        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios"></textarea>
        <hr>
        <label for="codigo_cliente">Código Cliente:</label>
        <input type="number" id="codigo_cliente" name="codigo_cliente" required>
        <hr>
        <button type="submit">Registrar Pedido</button>
    </form>
</body>
</html>
