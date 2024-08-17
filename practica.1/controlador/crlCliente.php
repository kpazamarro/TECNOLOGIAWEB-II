<?php
include_once "../modelo/modCliente.php";
//Llenado de los datos del formulario html.
$nombre_cliente=htmlspecialchars($_POST['nombre_cliente']);
$nombre_contacto=htmlspecialchars($_POST['nombre_contacto']);
$apellido_contacto=htmlspecialchars($_POST['apellido_contacto']);
$telefono=htmlspecialchars($_POST['telefono']);
$fax=htmlspecialchars($_POST['fax']);
$linea_direccion1=htmlspecialchars($_POST['linea_direccion1']);
$linea_direccion2=htmlspecialchars($_POST['linea_direccion2']);
$ciudad=htmlspecialchars($_POST['ciudad']);
$region=htmlspecialchars($_POST['region']);
$pais=htmlspecialchars($_POST['pais']);
$codigo_postal=htmlspecialchars($_POST['codigo_postal']);
$codigo_empleado_rep_ventas=htmlspecialchars($_POST['codigo_empleado_rep_ventas']);
$limite_credito=htmlspecialchars($_POST['limite_credito']);
//uso de los set del modelo cliente
$cliente= new Cliente();
$cliente->setNombreCliente($nombre_cliente);
$cliente->setNombreContacto($nombre_contacto);
$cliente->setApellidoContacto($apellido_contacto);
$cliente->setTelefono($telefono);
$cliente->setFax($fax);
$cliente->setLineaDireccion1($linea_direccion1);
$cliente->setLineaDireccion2($linea_direccion2);
$cliente->setCiudad($ciudad);
$cliente->setRegion($region);
$cliente->setPais($pais);
$cliente->setCodigoPostal($codigo_postal);
if($codigo_empleado_rep_ventas==""){
    $codigo_empleado_rep_ventas='null';
}
$cliente->setCodigoEmpleadoRepVentas($codigo_empleado_rep_ventas);
$cliente->setLimiteCredito($limite_credito);
$cliente->registrarCliente();

