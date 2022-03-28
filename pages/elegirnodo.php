<?php
  $idnodo = $_GET['filtro'];

  switch ($idnodo) {
    case 1:
        header("location:nodo.php?nodo=$idnodo");
        ?>
        <script>
            alert($idnodo)
        </script>
        <?php
        break;
    case 2:
        header("location:nodo.php?nodo=$idnodo");
        ?>
        <script>
            alert($idnodo)
        </script>
        <?php
        break;
    case 3:
        header("location:nodo.php?nodo=$idnodo");
        ?>
        <script>
            alert($idnodo)
        </script>
        <?php
        break;
    case 4:
        header("location:nodo.php?nodo=$idnodo");
        ?>
        <script>
            alert($idnodo)
        </script>
        <?php
        break;
}
?>