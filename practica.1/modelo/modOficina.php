<?php
include_once "conexion/conexionBase.php";
class Oficina {
    private $codigo_oficina;
    private $ciudad;
    private $pais;
    private $region;
    private $codigo_postal;
    private $telefono;
    private $linea_direccion1;
    private $linea_direccion2;
    private $conexion;

    public function __construct() {
        $this->codigo_oficina = null;
        $this->ciudad = "";
        $this->pais = "";
        $this->region = "";
        $this->codigo_postal = "";
        $this->telefono = "";
        $this->linea_direccion1 = "";
        $this->linea_direccion2 = "";
        $this->conexion = new ConexionBase();
    
    }
    public function getCodigoOficina() {
        return $this->codigo_oficina;
    }
    public function setCodigoOficina($codigo_oficina) {
        $this->codigo_oficina = $codigo_oficina;
    }


    public function getCiudad() {
        return $this->ciudad;
    }
    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }


    public function getPais() {
        return $this->pais;
    }
    public function setPais($pais) {
        $this->pais = $pais;
    }


    public function getRegion() {
        return $this->region;
    }
    public function setRegion($region) {
        $this->region = $region;
    }


    public function getCodigoPostal() {
        return $this->codigo_postal;
    }
    public function setCodigoPostal($codigo_postal) {
        $this->codigo_postal = $codigo_postal;
    }


    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


    public function getLineaDireccion1() {
        return $this->linea_direccion1;
    }
    public function setLineaDireccion1($linea_direccion1) {
        $this->linea_direccion1 = $linea_direccion1;
    }


    public function getLineaDireccion2() {
        return $this->linea_direccion2;
    }
    public function setLineaDireccion2($linea_direccion2) {
        $this->linea_direccion2 = $linea_direccion2;
    }

    public function registrarOficina(){
        $this->conexion->createConnection();
        $sql = "insert into oficina (
            ciudad, 
            pais, 
            region, 
            codigo_postal, 
            telefono, 
            linea_direccion1, 
            linea_direccion2
        ) values (
            '$this->ciudad',
            '$this->pais',
            '$this->region',
            '$this->codigo_postal',
            '$this->telefono',
            '$this->linea_direccion1',
            '$this->linea_direccion2'
        )";
        
        $this->conexion->executeQuery($sql);
    }
    

}