<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("C://laragon/www/crud/model/usernameModel.php");
            $this->model = new usernameModel();

        }
        public function guardar($nombre){
           $id =  $this->model->insertar($nombre);
           return ($id=false) ? header("location:show.php?id=".$id) : header("location:create.php");


        } 




    }


?>