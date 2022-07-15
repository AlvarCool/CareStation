<?php 
  include("db.php");

  if (isset($_POST['nombrenodo'])){
    if(strlen($_POST['nombrenodo']) >= 1);{
        $nombre = trim($_POST['nombrenodo']);
        
        if(($_POST['temperatura']) != 1){
            $temp = 0;
        }else{
            $temp = ($_POST['temperatura']);
        }
        if(($_POST['humedad']) != 1){
            $hum = 0;
        }else{
            $hum = ($_POST['humedad']);
        }
        if(($_POST['humedadrel']) != 1){
            $humrel = 0;
        }else{
            $humrel = ($_POST['humedadrel']);
        }
        if(($_POST['uv']) != 1){
            $uv = 0;
        }else{
            $uv = ($_POST['uv']);
        }

        $sql = "INSERT INTO `care-station`.`nodos` (`nombrenodo`, `temperatura`, `humedad`, `humedadrel`, `uv`) VALUES ('$nombre', '$temp', '$hum', '$humrel', '$uv')";
        $resultado = mysqli_query($con, $sql);

        if($resultado){
            echo "<script>alert ('Se dio de alta el nodo');window.location = 'alta-nodo.php'</script>";
        }
    }
  }
  
  if (isset($_POST['usuario'])){
    if(strlen($_POST['usuario']) >= 1);{
        $usuario = trim($_POST['usuario']);
        $pass = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
        if(($_POST['privilegio']) != 1){
            $privilegio = 0;
        }else{
            $privilegio = ($_POST['privilegio']);
        }

        $sql = "INSERT INTO `care-station`.`usuarios` (`usuario`, `password`, `privilegio`) VALUES ('$usuario', '$pass', '$privilegio')";
        $resultado = mysqli_query($con, $sql);

        if($resultado){
            echo "<script>alert ('Se dio de alta el usuario ;');window.location = 'alta-usuario.php'</script>";
        }
    }
  }
?>