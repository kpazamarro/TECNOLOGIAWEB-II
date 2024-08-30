<?php
include_once "../modelo/modOficina.php";

// Llenado de los formularios de datos HTML
$ciudad = htmlspecialchars($_POST['ciudad']);
$pais = htmlspecialchars($_POST['pais']);
$region = htmlspecialchars($_POST['region']);
$codigo_postal = htmlspecialchars($_POST['codigo_postal']);
$telefono = htmlspecialchars($_POST['telefono']);
$linea_direccion1 = htmlspecialchars($_POST['linea_direccion1']);
$linea_direccion2 = htmlspecialchars($_POST['linea_direccion2']);

// Uso de los set del modelo oficina
$oficina = new Oficina();
$oficina->setCiudad($ciudad);
$oficina->setPais($pais);
$oficina->setRegion($region);
$oficina->setCodigoPostal($codigo_postal);
$oficina->setTelefono($telefono);
$oficina->setLineaDireccion1($linea_direccion1);
$oficina->setLineaDireccion2($linea_direccion2);

// Registrar la oficina en la base de datos
$oficina->registrarOficina();
