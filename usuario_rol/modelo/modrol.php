<?php
include_once "conexion/conexionBase.php";
class Rol
{
    private $idRol;
    private $nombre;
    private $descripcion;
    private $con;
    public function __construct()
    {
        $this->idRol = null;
        $this->nombre = "";
        $this->descripcion = "";
        $this->con = new ConexionBase();
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function registrarRol()
    {
        $this->con->createConnection();
        if ($this->validarRol($this->nombre)) {
            echo json_encode(array("mensaje" => "El rol ya existe"));
        } else {
            $sql = "INSERT INTO roles(nombre, descripcion) VALUES('$this->nombre', '$this->descripcion')";
            $this->con->executeQuery($sql);
            echo json_encode(array("mensaje" => "Rol registrado"));
        }
    }
    private function validarRol($nombre)
    {
        $sql = "SELECT nombre FROM roles WHERE nombre='$nombre'";
        $resp = $this->con->executeQuery($sql);
        $datos = $this->con->getCountAffectedRows($resp);
        return $datos ? true : false;
    }
    public function listarRol()
    {
        try {
            $this->con->createConnection();
            
   
$sql = "SELECT * FROM roles";  // Nombre de la tabla corregido a "roles"
            $stmt = $this->con->executeQuery($sql);
            $roles = $stmt->fetch_all(MYSQLI_ASSOC);
            echo json_encode($roles);  // Devolver los roles en formato JSON
        } catch (Exception $e) {
            echo json_encode(array("mensaje" => "Error: " . $e->getMessage()));
        }
    }
}
?>
