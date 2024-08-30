<?php
include_once "../modelo/modEmpleado.php";

// Llenado de los formularios de datos HTML
$nombre = htmlspecialchars($_POST['nombre']);
$apellido1 = htmlspecialchars($_POST['apellido1']);
$apellido2 = htmlspecialchars($_POST['apellido2']);
$extension = htmlspecialchars($_POST['extension']);
$email = htmlspecialchars($_POST['email']);
$codigo_oficina = htmlspecialchars($_POST['codigo_oficina']);
$codigo_jefe = htmlspecialchars($_POST['codigo_jefe']);
$puesto = htmlspecialchars($_POST['puesto']);

// Uso de los set del modelo empleado
$empleado = new Empleado();
$empleado->setNombre($nombre);
$empleado->setApellido1($apellido1);
$empleado->setApellido2($apellido2);
$empleado->setExtension($extension);
$empleado->setEmail($email);
$empleado->setCodigoOficina($codigo_oficina);
if($codigo_jefe==""){
    $codigo_jefe='null';
}
$empleado->setCodigoJefe($codigo_jefe);
$empleado->setPuesto($puesto);

// Registrar el empleado en la base de datos
$empleado->registrarEmpleado();
