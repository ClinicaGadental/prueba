<?php
    require_once("C://laragon/www/crud/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST["nombre"]);
    


?>