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
    private $con;

    public function __construct()
    {
        $this->codigo_cliente=null;
        $this->nombre_cliente="";
        $this->nombre_contacto="";
        $this->apellido_contacto="";
        $this->telefono="";
        $this->fax="";
        $this->linea_direccion1="";
        $this->linea_direccion2="";
        $this->ciudad="";
        $this->region="";
        $this->pais="";
        $this->codigo_postal="";
        $this->codigo_empleado_rep_ventas='null';
        $this->limite_credito=0.0;
        $this->con= new ConexionBase();
    }

    /**
     * Get the value of codigo_cliente
     */
    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    /**
     * Set the value of codigo_cliente
     */
    public function setCodigoCliente($codigo_cliente): self
    {
        $this->codigo_cliente = $codigo_cliente;

        return $this;
    }

    /**
     * Get the value of nombre_cliente
     */
    public function getNombreCliente()
    {
        return $this->nombre_cliente;
    }

    /**
     * Set the value of nombre_cliente
     */
    public function setNombreCliente($nombre_cliente): self
    {
        $this->nombre_cliente = $nombre_cliente;

        return $this;
    }

    /**
     * Get the value of nombre_contacto
     */
    public function getNombreContacto()
    {
        return $this->nombre_contacto;
    }

    /**
     * Set the value of nombre_contacto
     */
    public function setNombreContacto($nombre_contacto): self
    {
        $this->nombre_contacto = $nombre_contacto;

        return $this;
    }

    /**
     * Get the value of apellido_contacto
     */
    public function getApellidoContacto()
    {
        return $this->apellido_contacto;
    }

    /**
     * Set the value of apellido_contacto
     */
    public function setApellidoContacto($apellido_contacto): self
    {
        $this->apellido_contacto = $apellido_contacto;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of fax
     */
    public function setFax($fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of linea_direccion1
     */
    public function getLineaDireccion1()
    {
        return $this->linea_direccion1;
    }

    /**
     * Set the value of linea_direccion1
     */
    public function setLineaDireccion1($linea_direccion1): self
    {
        $this->linea_direccion1 = $linea_direccion1;

        return $this;
    }

    /**
     * Get the value of linea_direccion2
     */
    public function getLineaDireccion2()
    {
        return $this->linea_direccion2;
    }

    /**
     * Set the value of linea_direccion2
     */
    public function setLineaDireccion2($linea_direccion2): self
    {
        $this->linea_direccion2 = $linea_direccion2;

        return $this;
    }

    /**
     * Get the value of ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     */
    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     */
    public function setRegion($region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of codigo_postal
     */
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    /**
     * Set the value of codigo_postal
     */
    public function setCodigoPostal($codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    /**
     * Get the value of codigo_empleado_rep_ventas
     */
    public function getCodigoEmpleadoRepVentas()
    {
        return $this->codigo_empleado_rep_ventas;
    }

    /**
     * Set the value of codigo_empleado_rep_ventas
     */
    public function setCodigoEmpleadoRepVentas($codigo_empleado_rep_ventas): self
    {
        $this->codigo_empleado_rep_ventas = $codigo_empleado_rep_ventas;

        return $this;
    }

    /**
     * Get the value of limite_credito
     */
    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }

    /**
     * Set the value of limite_credito
     */
    public function setLimiteCredito($limite_credito): self
    {
        $this->limite_credito = $limite_credito;

        return $this;
    }

    public function registrarCliente(){
        $this->con->createConnection();
        $sql="insert into cliente (nombre_cliente,
        nombre_contacto,
        apellido_contacto,
        telefono,
        fax,
        linea_direccion1,
        linea_direccion2,
        ciudad,
        region,
        pais,
        codigo_postal,
        codigo_empleado_rep_ventas,
        limite_credito
        ) values (
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
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}