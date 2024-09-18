<?php
include_once "../modelo/modrol.php"; 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function validarCampo($campo, $nombreCampo) {
        if (isset($campo) && !empty($campo)) {
            return htmlspecialchars($campo, ENT_QUOTES, 'UTF-8');
        } else {
            echo json_encode([
                "status" => 404,
                "mensaje" => "Falta el " . $nombreCampo
            ]);
            exit();
        }
    }
    $data = json_decode(file_get_contents('php://input'));
    $nombre = validarCampo($data->nombre, 'nombre');
    $descripcion = validarCampo($data->descripcion, 'descripción');
    $rol = new Rol();
    $rol->setNombre($nombre);
    $rol->setDescripcion($descripcion);
    $rol->registrarRol();
    $rol->listarRol();
}elseif ($method == "GET") {
    // Listar todos los roles
    $rol = new Rol();  // Crear el objeto Rol para listar
    $rol->listarRol();

} else {
    echo json_encode(array("mensaje" => "Método no permitido"));
}  

?>
