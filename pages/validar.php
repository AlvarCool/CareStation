<?php
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
if($usuario == "admin" && $contraseña == "123"){
    header("location:dashboard.php"); 
}else{
        include("index.php")
        ?>
        <script>
                alert("Usuario y/o contraseña incorrecta");
        </script>
        <?php
}
?>
