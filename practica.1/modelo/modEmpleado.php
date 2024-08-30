<?php
include_once "conexion/conexionBase.php";
class Empleado {
    private $codigo_empleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $extension;
    private $email;
    private $codigo_oficina;
    private $codigo_jefe;
    private $puesto;
    private $conexion;

    public function __construct() {
        $this->codigo_empleado = null;
        $this->nombre = "";
        $this->apellido1 = "";
        $this->apellido2 = "";
        $this->extension = "";
        $this->email = "";
        $this->codigo_oficina = "";
        $this->codigo_jefe = null;
        $this->puesto = "";
        $this->conexion = new ConexionBase(); 
    }

    // Métodos para establecer valores
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCodigoOficina($codigo_oficina) {
        $this->codigo_oficina = $codigo_oficina;
    }

    public function setCodigoJefe($codigo_jefe) {
        $this->codigo_jefe = $codigo_jefe;
    }

    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    // Método para registrar el empleado
    public function registrarEmpleado() {
        $this->conexion->createConnection();
        $sql = "insert into empleado (
            nombre,
            apellido1,
            apellido2,
            extension,
            email,
            codigo_oficina,
            codigo_jefe,
            puesto
        ) values (
            '$this->nombre',
            '$this->apellido1',
            '$this->apellido2',
            '$this->extension',
            '$this->email',
            $this->codigo_oficina,
            $this->codigo_jefe,
            '$this->puesto'
        )";
        echo $sql;
        $this->conexion->executeQuery($sql);
    }
}
