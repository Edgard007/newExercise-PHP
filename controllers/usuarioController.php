<?php
require_once "../models/Usuario.php";
$key = $_POST["key"];
$info = json_decode($_POST["info"]);
$objU  = new Usuario();
$retorno = false;
$msg= "Ocurrio un error en el servidor";

switch($key){
  case "agregar":
    $retorno = agregarUsuario($objU, $info);
    $msg = "Registro ingresado exitosamente";
  break;
}

echo json_encode(array("estado"=>$retorno, "mensaje"=>$msg));

function agregarUsuario(& $objU, $info){
    $objU->setUsername($info[0]->value);
    $objU->setPassword(sha1($info[1]->value));
    $objU->setRol($info[2]->value);
    $res = $objU->agregarUsuario();
    return $res;

}