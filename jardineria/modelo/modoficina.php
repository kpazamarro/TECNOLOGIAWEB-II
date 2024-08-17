<?php
include_once "conexion/conexionBase.php";

class Oficina
{
    private $codigo_oficina;
    private $ciudad;
    private $pais;
    private $region;
    private $codigoPostal;
    private $telefono;
    private $lineaDireccion1;
    private $lineaDireccion2;
    private $con;

    function __construct()
    {
        $this->codigo_oficina = "";
        $this->ciudad = "";
        $this->pais = "";
        $this->region = "";
        $this->codigoPostal = "";
        $this->telefono = "";
        $this->lineaDireccion1 = "";
        $this->lineaDireccion2 = "";
        $this->con = new ConexionBase();
    }

    public function setCodigoOficina($v)
    {
        $this->codigo_oficina = $v;
    }
    public function getCodigoOficina()
    {
        return $this->codigo_oficina;
    }
    public function setCiudad($v)
    {
        $this->ciudad = $v;
    }
    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setPais($v)
    {
        $this->pais = $v;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function setRegion($v)
    {
        $this->region = $v;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setCodigoPostal($v)
    {
        $this->codigoPostal = $v;
    }
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    public function setTelefono($v)
    {
        $this->telefono = $v;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setLineaDireccion1($v)
    {
        $this->lineaDireccion1 = $v;
    }
    public function getLineaDireccion1()
    {
        return $this->lineaDireccion1;
    }
    public function setLineaDireccion2($v)
    {
        $this->lineaDireccion2 = $v;
    }
    public function getLineaDireccion2()
    {
        return $this->lineaDireccion2;
    }

    public function registrarOficina()
    {
        $this->con->createConnection();
        $sql = "INSERT INTO oficina (codigo_oficina, ciudad, pais, region, codigo_postal, telefono, linea_direccion1, linea_direccion2)
                VALUES ('$this->codigo_oficina', '$this->ciudad', '$this->pais', '$this->region', '$this->codigoPostal', '$this->telefono', '$this->lineaDireccion1', '$this->lineaDireccion2')";
        $this->con->executeQuery($sql);
        header('Location: ../vista/registroOficina.php');
    }
}
?>
