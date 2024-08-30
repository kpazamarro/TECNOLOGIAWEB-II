<?php
include_once "conexion/conexionBase.php";
class Cliente {
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
    private $conexion;

    public function __construct() {
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
        $this->codigo_empleado_rep_ventas ='null';
        $this->limite_credito = 0.0;
        $this->conexion = new ConexionBase();
    }


    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }
    public function setCodigoCliente($codigo_cliente): self
    {
        $this->codigo_cliente = $codigo_cliente;
        return $this;
    }


    public function getNombreCliente()
    {
        return $this->nombre_cliente;
    }
    public function setNombreCliente($nombre_cliente): self
    {
        $this->nombre_cliente = $nombre_cliente;
        return $this;
    }

  
    public function getNombreContacto()
    {
        return $this->nombre_contacto;
    }
    public function setNombreContacto($nombre_contacto): self
    {
        $this->nombre_contacto = $nombre_contacto;
        return $this;
    }


    public function getApellidoContacto()
    {
        return $this->apellido_contacto;
    }
    public function setApellidoContacto($apellido_contacto): self
    {
        $this->apellido_contacto = $apellido_contacto;
        return $this;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;
        return $this;
    }


    public function getFax()
    {
        return $this->fax;
    }
    public function setFax($fax): self
    {
        $this->fax = $fax;
        return $this;
    }


    public function getLineaDireccion1()
    {
        return $this->linea_direccion1;
    }
    public function setLineaDireccion1($linea_direccion1): self
    {
        $this->linea_direccion1 = $linea_direccion1;
        return $this;
    }


    public function getLineaDireccion2()
    {
        return $this->linea_direccion2;
    }
    public function setLineaDireccion2($linea_direccion2): self
    {
        $this->linea_direccion2 = $linea_direccion2;
        return $this;
    }


    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;
        return $this;
    }


    public function getRegion()
    {
        return $this->region;
    }
    public function setRegion($region): self
    {
        $this->region = $region;
        return $this;
    }


    public function getPais()
    {
        return $this->pais;
    }
    public function setPais($pais): self
    {
        $this->pais = $pais;
        return $this;
    }


    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }
    public function setCodigoPostal($codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;
        return $this;
    }


    public function getCodigoEmpleadoRepVentas()
    {
        return $this->codigo_empleado_rep_ventas;
    }
    public function setCodigoEmpleadoRepVentas($codigo_empleado_rep_ventas): self
    {
        $this->codigo_empleado_rep_ventas = $codigo_empleado_rep_ventas;
        return $this;
    }


    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }
    public function setLimiteCredito($limite_credito): self
    {
        $this->limite_credito = $limite_credito;
        return $this;
    }


    public function registrarCliente(){
        $this->conexion->createConnection();
        $sql = "insert into cliente (
        nombre_cliente, 
        nombre_contacto, 
        apellido_contacto, 
        telefono, 
        fax, 
        linea_direccion1, 
        linea_direccion2, 
        ciudad, 
        region, pais, 
        codigo_postal, 
        codigo_empleado_rep_ventas, 
        limite_credito
        )values(
        '$this->nombre_cliente',
        '$this->nombre_contacto',
        '$this->apellido_contacto',
        '$this->telefono',
        '$this->fax',
        '$this->linea_direccion1',
        '$this->linea_direccion2',
        '$this->ciudad',
        '$this->region',
        '$this->pais',
        '$this->codigo_postal',
         $this->codigo_empleado_rep_ventas,
        '$this->limite_credito'
         )";
         $this->conexion->executeQuery($sql);
    }
}