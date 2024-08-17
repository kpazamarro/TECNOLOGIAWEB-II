<?php
include_once "../modelo/modPedido.php";

$pedido = new Pedido();

$fecha_pedido = htmlspecialchars($_POST['fecha_pedido']);
$fecha_esperada = htmlspecialchars($_POST['fecha_esperada']);
$fecha_entrega = htmlspecialchars($_POST['fecha_entrega']);
$estado = htmlspecialchars($_POST['estado']);
$comentarios = htmlspecialchars($_POST['comentarios']);
$codigo_cliente = htmlspecialchars($_POST['codigo_cliente']);

$pedido->setFechaPedido($fecha_pedido);
$pedido->setFechaEsperada($fecha_esperada);
$pedido->setFechaEntrega($fecha_entrega);
$pedido->setEstado($estado);
$pedido->setComentarios($comentarios);
$pedido->setCodigoCliente($codigo_cliente);

$pedido->registrarPedido();
?>
