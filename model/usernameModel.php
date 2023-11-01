<?php
   class usernameModel{
    private $PDO;
    Public function __Construct()
    {
         require_once("C://laragon/www/crud/config/db.php");
         $con = new db();
         $this->$PDO = $con->conexion();
    }
    public function insertar($nombre){
        $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
        $stament->binParam(":nombre",$nombre);
        return ($stament->excecute()) ? $this->PDO->lastInsertId() : false;
    }

   }


?>