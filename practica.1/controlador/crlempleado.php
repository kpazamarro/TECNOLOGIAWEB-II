<?php
include_once "../modelo/modEmpleado.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
try{
    $empleado = new Empleado();
    $empleado->setNombre($_POST['nombre']);
    $empleado->setApellido1($_POST['apellido1']);
    $empleado->setApellido2($_POST['apellido2']);
    $empleado->setExtension($_POST['extension']);
    $empleado->setEmail($_POST['email']);
    $empleado->setCodigoOficina($_POST['codigo_oficina']);
    $empleado->setCodigoJefe($_POST['codigo_jefe']);
    $empleado->setPuesto($_POST['puesto']);
    
    $empleado->registrarEmpleado();
}catch (Exception $e) {
    echo "Agregado: " . $e->getMessage();
}
}
?>