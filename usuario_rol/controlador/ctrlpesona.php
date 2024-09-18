<?php
include_once "../modelo/modpersona.php"; 
$method = $_SERVER['REQUEST_METHOD'];
$data = json_decode(file_get_contents("php://input"));
function validarCampo($campo, $nombreCampo, $opcional = false) {
    if ($opcional && empty($campo)) {
        return '';
    }
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
if ($method == "POST") {
    $nombre = validarCampo($data->nombre, 'nombre');
    $apellido = validarCampo($data->apellido, 'apellido');
    $email = validarCampo($data->email, 'email');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => 400,
            "mensaje" => "El email no es válido"
        ]);
        exit();
    }
    $fecha_nacimiento = validarCampo($data->fecha_nacimiento, 'fecha de nacimiento');
    $telefono = validarCampo($data->telefono, 'teléfono');
    $persona = new Persona();
    $persona->setNombre($nombre);
    $persona->setApellido($apellido);
    $persona->setEmail($email);
    $persona->setFechaNacimiento($fecha_nacimiento);
    $persona->setTelefono($telefono);
    $persona->registrarPersona();
} elseif ($method=="GET") {
    if($data->operacion=="ListarPersonas"){
        $persona = new persona();
        $persona->ListarPersonas();
    }
    elseif ($data->operacion=="BuscarPersona"){
        $persona = new Persona();
        $persona->setIdPersona($data->idPersona);
        $persona->buscarPersona();
    }
}
