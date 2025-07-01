<?php
header('Content-Type: application/json'); // MUY IMPORTANTE
require_once('modelo.php');
$obj= new clase_representantes();
$result=$obj->_consultarcodigo($_POST['codigo']);
$fila = $result->fetch();
$datos = array(
        "codigo_ok" => $fila["REP_CODIGO"],
        "cedula_ok" => $fila["REP_CEDULA"],
        "apenom_ok" => $fila["REP_APENOM"]
);

    // Salida en formato JSON 
    echo json_encode($datos);
?>
