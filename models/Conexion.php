<?php
require_once "../app/config.php";

function conectar(){

$con = new mysqli(HOTS,USER,PASS,BD);
    if($con->connect_errno){
        echo  "Error en la conexion";
        die();
    }
    
    return $con;


}


