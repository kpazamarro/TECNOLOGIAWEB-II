<?php
include_once "../modelo/modoficina.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oficina = new Oficina();
    
    $oficina->setCodigoOficina($_POST['codigo_oficina']);
    $oficina->setCiudad($_POST['ciudad']);
    $oficina->setPais($_POST['pais']);
    $oficina->setRegion($_POST['region']);
    $oficina->setCodigoPostal($_POST['codigo_postal']);
    $oficina->setTelefono($_POST['telefono']);
    $oficina->setLineaDireccion1($_POST['linea_direccion1']);
    $oficina->setLineaDireccion2($_POST['linea_direccion2']);
    
    $oficina->registrarOficina();
}
?>
