<?php
include_once "conexion/conexionBase.php";

class Empleado{
    private $codigo_empleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $extension;
    private $email;
    private $codigo_oficina;
    private $codigo_jefe;
    private $puesto;
    private $con;

    function __construct(){
        $this->codigo_empleado=null;
        $this->nombre="";
        $this->apellido1="";
        $this->apellido2="";
        $this->extension="";
        $this->email="";
        $this->codigo_oficina=0;
        $this->codigo_jefe=0;
        $this->puesto="";
        $this->con = new ConexionBase();
    }
    public function setCodigoEmpleado($v){$this->codigo_empleado=$v;}
    public function getCodigoEmpleado($v){return $this->codigo_empleado=$v;}
    public function setNombre($v){$this->nombre=$v;}
    public function getNombre($v){return $this->nombre=$v;}
    public function setApellido1($v){$this->apellido1=$v;}
    public function getApellido1($v){return $this->apellido1=$v;}
    public function setApellido2($v){$this->apellido2=$v;}
    public function getApellido2($v){return $this->apellido2=$v;}
    public function setExtension($v){$this->extension=$v;}
    public function getExtension($v){return $this->extension=$v;}
    public function setEmail($v){$this->email=$v;}
    public function getEmail($v){return $this->email=$v;}
    public function setCodigoOficina($v){$this->codigo_oficina=$v;}
    public function getCodigoOficina($v){return $this->codigo_oficina=$v;}
    public function setCodigoJefe($v){$this->codigo_jefe=$v;}
    public function getCodigoJefe($v){return $this->codigo_jefe=$v;}
    public function setPuesto($v){$this->puesto=$v;}
    public function getPuesto($v){return $this->puesto=$v;}

    public function registrarEmpleado(){
        $this->con->createConnection();
        
        $codigo_empleado = $this->getCodigoEmpleado($codigo_empleado);
        $checkQuery = "SELECT COUNT(*) AS count FROM cliente WHERE codigo_cliente = $codigo_cliente";
        $result = $this->con->executeQuery($checkQuery);
        $row = $result->fetch_assoc();

        if ($row['count'] == 0) {
            throw new Exception("El código de cliente '$codigo_cliente' no existe en la base de datos.");
        }
        $sql="INSERT INTO empleado(nombre, apellido1, apellido2, extension, email, codigo_oficina, codigo_jefe, puesto)
        values(
        '{$this->nombre}'
        '{$this->apellido1}'
        '{$this->apellido2}'
        '{$this->extension}'
        '{$this->codigo_email}'
        '{$this->codigo_oficina}'
        '{$this->codigo_jefe}'
        '{$this->puesto}'
        )";
          $this->con->executeQuery($sql);
          header('Location: ../vista/registroEmplezdo.php');  
    }
}
?> 