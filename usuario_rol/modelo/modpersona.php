<?php
session_start();
include_once "conexion/conexionBase.php";

class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $email;
    private $fecha_nacimiento;
    private $telefono;
    private $con;

    public function __construct()
    {
        $this->idPersona = null;
        $this->nombre = "";
        $this->apellido = "";
        $this->email = "";
        $this->fecha_nacimiento = "";
        $this->telefono = "";
        $this->con = new ConexionBase();
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFechaNacimiento($fecha_nacimiento)
    {
        $date = DateTime::createFromFormat('d-m-Y', $fecha_nacimiento);
        if ($date) {
            $this->fecha_nacimiento = $date->format('Y-m-d');
        } else {
            echo json_encode(array("mensaje" => "Fecha de nacimiento inválida"));
            exit();
        }
    }
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function registrarPersona()
    {
        $this->con->createConnection();

        if ($this->validarEmail($this->email)) {
            echo json_encode(array("mensaje" => "El email ya existe"));
        } else {
            $sql = "INSERT INTO personas(nombre, apellido, email, fecha_nacimiento, telefono)
                    VALUES('$this->nombre', '$this->apellido', '$this->email', '$this->fecha_nacimiento', '$this->telefono')";
            $this->con->executeQuery($sql);
            echo json_encode(array("mensaje" => "Persona Registrada"));
        }
    }
    private function validarEmail($email)
    {
        $sql = "SELECT email FROM personas WHERE email='$email'";
        $resp = $this->con->executeQuery($sql);
        $datos = $this->con->getCountAffectedRows($resp);
        return $datos ? true : false;
    }
    //Realiza la prueba de la API utilizando POSTMAN o INSOMNIA de las siguientes funcionalidades. Vale 100 puntos
    //Login
    #Registrar Persona
    #Registrar Rol
    #Registrar Usuario
    public function listarPersonas()
    {
        $this->con->createConnection();
        $sql = "SELECT * FROM personas";
        $resp = $this->con->executeQuery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($resp)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    public function buscarPersona()
    {   $this->con->createConnection();
        $sql = "SELECT * FROM personas WHERE idPersona='$this->idPersona'";
        $resp = $this->con->executeQuery($sql);
        $data = mysqli_fetch_assoc($resp);
        echo json_encode($data);
    }
}
