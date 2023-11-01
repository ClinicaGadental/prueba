<?php
    require_once("C://Laragon/www/crud/view/head/head.php");

?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label>
        <input type="text" name "nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class= "btn btn-danger" href="index.php">cancelar</a>
    </form>

<?php
    require_once("c://Laragon/www/crud/view/head/footer.php");
    
?>