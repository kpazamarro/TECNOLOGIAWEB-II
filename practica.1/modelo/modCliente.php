<?php
include_once "conexion/conexionBase.php";

class Cliente
{
    private $codigo_cliente;
    private $nombre_cliente;
    private $nombre_contacto;
    private $apellido_contacto;
    private $telefono;
    private $fax;
    private $linea_direccion1;
    private $linea_direccion2;
    private $ciudad;
    private $region;
    private $pais;
    private $codigo_postal;
    private $codigo_empleado_rep_ventas;
    private $limite_credito;
    private $con;

    function __construct()
    {
        $this->codigo_cliente = null;
        $this->nombre_cliente = "";
        $this->nombre_contacto = "";
        $this->apellido_contacto = "";
        $this->telefono = "";
        $this->fax = "";
        $this->linea_direccion1 = "";
        $this->linea_direccion2 = "";
        $this->ciudad = "";
        $this->region = "";
        $this->pais = "";
        $this->codigo_postal = "";
        $this->codigo_empleado_rep_ventas = null;
        $this->limite_credito = 0.00;
        $this->con = new ConexionBase();
    }

    public function setCodigoCliente($v) { $this->codigo_cliente = $v; }
    public function getCodigoCliente() { return $this->codigo_cliente; }
    public function setNombreCliente($v) { $this->nombre_cliente = $v; }
    public function getNombreCliente() { return $this->nombre_cliente; }
    public function setNombreContacto($v) { $this->nombre_contacto = $v; }
    public function getNombreContacto() { return $this->nombre_contacto; }
    public function setApellidoContacto($v) { $this->apellido_contacto = $v; }
    public function getApellidoContacto() { return $this->apellido_contacto; }
    public function setTelefono($v) { $this->telefono = $v; }
    public function getTelefono() { return $this->telefono; }
    public function setFax($v) { $this->fax = $v; }
    public function getFax() { return $this->fax; }
    public function setLineaDireccion1($v) { $this->linea_direccion1 = $v; }
    public function getLineaDireccion1() { return $this->linea_direccion1; }
    public function setLineaDireccion2($v) { $this->linea_direccion2 = $v; }
    public function getLineaDireccion2() { return $this->linea_direccion2; }
    public function setCiudad($v) { $this->ciudad = $v; }
    public function getCiudad() { return $this->ciudad; }
    public function setRegion($v) { $this->region = $v; }
    public function getRegion() { return $this->region; }
    public function setPais($v) { $this->pais = $v; }
    public function getPais() { return $this->pais; }
    public function setCodigoPostal($v) { $this->codigo_postal = $v; }
    public function getCodigoPostal() { return $this->codigo_postal; }
    public function setCodigoEmpleadoRepVentas($v) { $this->codigo_empleado_rep_ventas = intval($v); }
    public function getCodigoEmpleadoRepVentas() { return $this->codigo_empleado_rep_ventas; }
    public function setLimiteCredito($v) { $this->limite_credito = floatval($v); }
    public function getLimiteCredito() { return $this->limite_credito; }

    public function registrarCliente()
    {
        $this->con->createConnection();

       
        $codigo_empleado_rep_ventas = $this->getCodigoEmpleadoRepVentas();
        $checkQuery = "SELECT COUNT(*) AS count FROM empleado WHERE codigo_empleado = $codigo_empleado_rep_ventas";
        $result = $this->con->executeQuery($checkQuery);
        $row = $result->fetch_assoc();

        if ($row['count'] == 0) {
            throw new Exception("El código de empleado '$codigo_empleado_rep_ventas' no existe en la base de datos.");
        }

       
        $sql = "INSERT INTO cliente (nombre_cliente, nombre_contacto, apellido_contacto, telefono, fax, linea_direccion1, linea_direccion2, ciudad, region, pais, codigo_postal, codigo_empleado_rep_ventas, limite_credito)
        VALUES (
            '{$this->nombre_cliente}', 
            '{$this->nombre_contacto}', 
            '{$this->apellido_contacto}', 
            '{$this->telefono}', 
            '{$this->fax}', 
            '{$this->linea_direccion1}', 
            '{$this->linea_direccion2}', 
            '{$this->ciudad}', 
            '{$this->region}', 
            '{$this->pais}', 
            '{$this->codigo_postal}', 
            $codigo_empleado_rep_ventas, 
            {$this->limite_credito}
        )";

        $this->con->executeQuery($sql);
        header('Location: ../vista/registroCliente.php');
    }
}
?>
