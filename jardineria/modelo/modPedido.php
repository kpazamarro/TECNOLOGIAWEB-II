<?php
include_once "conexion/conexionbase.php";

class Pedido
{
    private $fecha_pedido;
    private $fecha_esperada;
    private $fecha_entrega;
    private $estado;
    private $comentarios;
    private $codigo_cliente;
    private $con;

    function __construct()
    {
        $this->fecha_pedido = "";
        $this->fecha_esperada = "";
        $this->fecha_entrega = "";
        $this->estado = "";
        $this->comentarios = "";
        $this->codigo_cliente = 0;
        $this->con = new conexionBase();
    }

    public function setFechaPedido($v) { $this->fecha_pedido = $v; }
    public function getFechaPedido() { return $this->fecha_pedido; }

    public function setFechaEsperada($v) { $this->fecha_esperada = $v; }
    public function getFechaEsperada() { return $this->fecha_esperada; }

    public function setFechaEntrega($v) { $this->fecha_entrega = $v; }
    public function getFechaEntrega() { return $this->fecha_entrega; }

    public function setEstado($v) { $this->estado = $v; }
    public function getEstado() { return $this->estado; }

    public function setComentarios($v) { $this->comentarios = $v; }
    public function getComentarios() { return $this->comentarios; }

    public function setCodigoCliente($v) { $this->codigo_cliente = $v; }
    public function getCodigoCliente() { return $this->codigo_cliente; }

    public function registrarPedido()
    {
        $this->con->createConnection();
        $sql = "INSERT INTO pedido (fecha_pedido, fecha_esperada, fecha_entrega, estado, comentarios, codigo_cliente) VALUES (
            '$this->fecha_pedido', '$this->fecha_esperada', '$this->fecha_entrega', '$this->estado', '$this->comentarios', '$this->codigo_cliente')";
        $this->con->executeQuery($sql);
        header('Location: ../vista/registroPedido.php');
    }
}
?>
