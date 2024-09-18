<?php
include_once "../modelo/modusuario.php";
$input = file_get_contents('php://input');
$data = json_decode($input);
if ($data && isset($data->operacion)) {
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "POST" && $data->operacion == "Login") {
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
        $username = validarCampo($data->username, 'username');
        $password = validarCampo($data->password, 'contraseña');
        $usuario = new Usuario();
        $usuario->loginUsuario($username, $password);

    }
    if ($method == "POST" && $data->operacion == "Logout") {
        $username = htmlspecialchars($data->username);
    
        $usuario = new Usuario();
        $usuario->logoutUsuario($username);
    } 
    elseif ($method == "POST" && $data->operacion == "RegistrarUsuario") {
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
        $estado=validarCampo($data->estado, "estado");
        $username = validarCampo($data->username, 'username');
        $email = validarCampo($data->email, 'email');
        $password = validarCampo($data->password, 'contraseña');
        $rol_id = validarCampo($data->rol_id, 'rol');
        $persona_id = validarCampo($data->persona_id, 'persona_id'); 
        $usuario = new Usuario();
        $usuario->setUsername($username);
        $usuario->setEmail($email);
        $usuario->setEstado($estado);
        $usuario->setPassword($password);
        $usuario->setRol($rol_id);
        $usuario->setPersonaId($persona_id); 
        $usuario->registrarUsuario();
    }
    elseif ($method=="GET") {
        if($data->operacion=="ListarUsuarios"){
            $usuario = new usuario();
            $usuario->ListarUsuarios();
        }
        elseif ($data->operacion=="BuscarUsuario"){
            $usuario= new Usuario();
            $usuario->setPersonaId($data->idUsuario);
            $usuario->buscarUsuario();
        }
    }
}
?>
