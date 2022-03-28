<?php
    $nombre = $_POST("nombre");
    if($nombre != ""){
    include("alta-nodo.php")
    ?>
    <script>
        alert("SE REGISTRO EL NUEVO NODO")
    </script>
    ?>
    <?php
    }else{
        alert("Favor de ingresar un nombre")
    }
?>
