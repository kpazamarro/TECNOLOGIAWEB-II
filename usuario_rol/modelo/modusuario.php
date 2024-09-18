<?php
include_once "conexion/conexionBase.php";

class Usuario
{
    private $idUsuario;
    private $username;
    private $email;
    private $password;
    private $estado;
    private $rol_id;
    private $persona_id;
    private $con;
    public function __construct()
    {
        $this->idUsuario = null;
        $this->username = "";
        $this->email = "";
        $this->password = "";
        $this->rol_id = "";
        $this->estado=" ";
        $this->persona_id = null;
        $this->con = new ConexionBase();
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    

    public function setPassword($password)
    {

        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function setRol($rol_id)
    {
        $this->rol_id = $rol_id;
    }

    public function setPersonaId($persona_id)
    {
        $this->persona_id = $persona_id;
    }
    public function setestado($estado)
    {
        $this->estado = $estado;
    }

    public function registrarUsuario()
    {
        try {
            $this->con->createConnection();

            if ($this->validarEmail($this->email)) {
                echo json_encode(array("mensaje" => "El email ya existe"));
            } else {
                $sql = "INSERT INTO usuarios (username, password, rol_id, persona_id) VALUES (?, ?, ?, ?)";
                $stmt = $this->con->prepare($sql);
                $stmt->bind_param("ssii", $this->username, $this->password, $this->rol_id, $this->persona_id);
                if ($stmt->execute()) {
                    echo json_encode(array("mensaje" => "Usuario Registrado"));
                } else {
                    echo json_encode(array("mensaje" => "Error al registrar el usuario"));
                }
            }
        } catch (Exception $e) {
            echo json_encode(array("mensaje" => "Error: " . $e->getMessage()));
        }
    }
    private function validarEmail($email)
    {
        $sql = "SELECT username FROM usuarios WHERE username = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
    public function listarUsuarios()
    {
        $this->con->createConnection();
        $sql = "SELECT * FROM usuarios";
        $resp = $this->con->executeQuery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($resp)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    public function buscarUsuario()
    {   $this->con->createConnection();
        $sql = "SELECT * FROM usuarios WHERE idusuario='$this->idUsuario'";
        $resp = $this->con->executeQuery($sql);
        $data = mysqli_fetch_assoc($resp);
        echo json_encode($data);
    }
 /*   public function loginUsuario($username, $password)
    {
        $this->con->createConnection();
        $stmt = $this->con->prepare("SELECT * FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resp = $stmt->get_result();
        $usuario = $resp->fetch_assoc();
        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['username'];
            $_SESSION['user_role'] = $usuario['rol_id'];
            
            echo json_encode(array("mensaje" => "Inicio de sesión exitoso"));
        } else {
            echo json_encode(array("mensaje" => "Email o contraseña incorrectos"));
        }
    }*/
    public function loginUsuario($username, $password)
{
    $this->con->createConnection();
    $stmt = $this->con->prepare("SELECT * FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resp = $stmt->get_result();
    $usuario = $resp->fetch_assoc();

    if ($usuario && password_verify($password, $usuario['password'])) {
     
        $stmt_update = $this->con->prepare("UPDATE usuarios SET estado = 1 WHERE id = ?");
        $stmt_update->bind_param("i", $usuario['id']);
        $stmt_update->execute();

        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['user_name'] = $usuario['username'];
        $_SESSION['user_role'] = $usuario['rol_id'];

        echo json_encode(array("mensaje" => "Inicio de sesión exitoso"));
    } else {
        echo json_encode(array("mensaje" => "Email o contraseña incorrectos"));
    }
}
public function logoutUsuario($username)
{
    // Iniciar la conexión
    $this->con->createConnection();

    // Cambiar estado a 0 en la base de datos
    $stmt = $this->con->prepare("UPDATE usuarios SET estado = 0 WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        // Verificar si la sesión está iniciada antes de destruirla
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Destruir la sesión solo si está iniciada
        if (isset($_SESSION)) {
            session_destroy();
            echo json_encode(array("mensaje" => "Cierre de sesión exitoso"));
        } else {
            echo json_encode(array("mensaje" => "No hay sesión iniciada"));
        }
    } else {
        echo json_encode(array("mensaje" => "Error al cerrar sesión"));
    }
}



}
