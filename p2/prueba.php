<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
}
print_r($_POST);
$data = json_decode(
    file_get_contents("php://input", true)
);
echo $data->nombre;
$nombre = $data->nombre;
$edadd = $data->edadd;
if ($edadd > 18) {

    echo json_encode(array(
        "mensaje1" => "bienvenido $nombre eres mayor de edad"
    ));
} else {
    echo json_encode(array(
        "mensaje1" => "$nombre bienvenido no eres mayor de edad"
    ));
}
echo "\n";
$data = json_decode(file_get_contents("php://input", true));
$fechanac = $data->fechanac;
$fechaActual = new DateTime();
$fechanac = DateTime::createFromFormat('d-m-Y', $fechanac);
$edad = $fechaActual->diff($fechanac)->y;
echo json_encode(array(
    "mensaje2" => "Tu edad es $edad anos."
));
echo "\n";
$data = json_decode(file_get_contents("php://input", true));
if (isset($data->email)) {
    $email = $data->email;


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "correo valido";
    } else {
        $mensaje = "correo invalido";
    }
    echo json_encode(array("mensaje3" => $mensaje));
} else {

    echo json_encode(array("error" => "No se proporcionó la propiedad 'email' en el JSON."));
}
echo "\n";

if (isset($data->nombres) && isset($data->papellido) && isset($data->sapellido)) {
    include_once "../nuewproject/modelo/modPersona.php"; // Asegúrate de que la ruta es correcta
    $persona = new Persona();
    $persona->setNombres($data->nombres);
    $persona->setPapellido($data->papellido);
    $persona->setSapellido($data->sapellido);
    
    $persona->registrarPersona();
    $responses['mensaje4'] = "Persona registrada correctamente.";
} else {
    $responses['error4'] = "Faltan datos para registrar la persona.";
}
