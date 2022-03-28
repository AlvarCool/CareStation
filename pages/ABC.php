<?php
    $nombre = $_POST['nombre'];
    if($nombre != ""){
    	include("alta-nodo.php")
    	?>
	    <script>
	        alert("SE REGISTRO EL NUEVO NODO")
	    </script>
    	<?php
    }else{
        include("alta-nodo.php")
        ?>
        <script>
            alert("Favor de ingresar nombre del nodo")
        </script>
        <?php
    }
?>
