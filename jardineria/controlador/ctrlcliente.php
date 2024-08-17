<?php
include_once "../modelo/modCliente.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $cliente = new Cliente();
        $cliente->setNombreCliente($_POST['nombre_cliente']);
        $cliente->setNombreContacto($_POST['nombre_contacto']);
        $cliente->setApellidoContacto($_POST['apellido_contacto']);
        $cliente->setTelefono($_POST['telefono']);
        $cliente->setFax($_POST['fax']);
        $cliente->setLineaDireccion1($_POST['linea_direccion1']);
        $cliente->setLineaDireccion2($_POST['linea_direccion2']);
        $cliente->setCiudad($_POST['ciudad']);
        $cliente->setRegion($_POST['region']);
        $cliente->setPais($_POST['pais']);
        $cliente->setCodigoPostal($_POST['codigo_postal']);
        $cliente->setCodigoEmpleadoRepVentas($_POST['codigo_empleado_rep_ventas']);
        $cliente->setLimiteCredito($_POST['limite_credito']);
        
        $cliente->registrarCliente();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
