<?php

    
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $conexion=mysqli_init(); 
    mysqli_real_connect($conexion, 'carestation-db.mysql.database.azure.com', 'alvar@carestation-db', 'S3gurid4d', 'carestation', 3306);
    if (mysqli_connect_errno($conexion)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

    $consulta ="SELECT*FROM usuarios where usuario = '$usuario' and $contraseña = 'contraseña'";
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
