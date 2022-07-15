<?php
  session_start();
  
  if(isset($_GET['cerrar_sesion'])){
    
    session_unset();
    session_destroy();

  }

  if(isset($_POST['usuario']) && isset($_POST['contraseña'])){

    $dbhost = "dbcare.mysql.database.azure.com";
    $dbuser = "Care@dbcare";
    $dbpass = "1q2w3e4r!";
    $dbname = "care-station";

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$db){
        die("No hay conexion: ".mysqli_connect_error());
    }

    $query = mysqli_query($db, "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and password = '".$contraseña."'");
    $row = mysqli_fetch_array($query);
    
    if($row == true){

        $rol = $row[3];
        
        $_SESSION['privilegio'] = $rol;

        switch($_SESSION['privilegio']){
            case 0:
                header("location: dash_user.php");
                break;
            case 1:
                header("location: dash_admin.php");
                break;

            default:
          }

    }else{

        echo "<script>alert ('Usuario y/o contraseña incorrecta');window.location = 'index.php'</script>";

    }
    mysqli_close($db);
  }
?>