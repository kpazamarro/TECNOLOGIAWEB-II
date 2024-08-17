<?php
include_once "../modelo/modPersona.php";
$persona= new Persona();
$nombres=htmlspecialchars($_POST['nombres']);
$papellido=htmlspecialchars($_POST['papellido']);
$sapellido=htmlspecialchars($_POST['sapellido']);
$persona->setNombres($nombres);
$persona->setPapellido($papellido);
$persona->setSapellido($sapellido);
$persona->registrarPersona();