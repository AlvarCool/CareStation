<?php

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $conexion = mysqli_connect("carestation-db.mysql.database.azure.com","alvar","S3gurid4d","carestation","3306");

    $consulta ="SELECT*FROM usuarios where usuario = '$usuario' and contrasenia = 'contrasenia'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:dashboard.php");
    }else{
        ?>
        <?php
        include("index.php")
        ?>
        <h1 class="bad">ERROR DE AUTENTICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
