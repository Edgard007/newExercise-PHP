<?php
require_once "Conexion.php";

class Usuario {
    
    private $id;
    private $username;
    private $password;
    private $rol;
    private $estado;
    private $db;

    public function __construct()
    {
        $this->db = conectar();
    }


    public  function getDb()
    {
       return $this->db;
    }


    public  function getId()
    {
       return $this->id;
    }

    public  function getUsername()
    {
       return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public  function getPassword()
    {
       return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public  function getRol()
    {
       return $this->rol;
    }


    public function setRol($rol)
    {
        $this->rol = $rol;
    }


    public  function getEstado()
    {
       return $this->estado;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    

    public function getAllUsers()
    {
       $sql = "SELECT * FROM usuario WHERE estado = 1";
       $info = $this->db->query($sql);
       $dato = false;
       if($info->num_rows >0 ){
         $dato = $info;
       }else{
           $dato = false;
       }
       return $dato;
    }

public function agregarUsuario()
{
    $sql ="INSERT INTO usuario VALUES (0, '".$this->username."','".$this->password."','".$this->rol."',1)";
    $res = $this->db->query($sql);
    return $res;
}

}