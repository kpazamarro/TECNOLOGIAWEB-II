<?php
include_once "conexion/conexionBase.php";
class Persona {
    private $idPersona
    private $nombres;
    private $primerApellido;
    private $segundoApellido;
    private $conexion;

    function __construct(){
        $this -> nombres = "";
    $this -> conexion = new ConexionBase();
    }

}
