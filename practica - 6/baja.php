<html>
<head>
    <title>Baja</title>
</head>
<body>
    <?php
    include ("conexion.php");
    $ciudad = $_POST['ciudad'];
    $query = "SELECT * FROM ciudades WHERE ciudad='$ciudad' ";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) == 0) {
        echo ("La ciudad no se encuentra registrada <br>");
        echo ("<a href='formBaja.html'>Volver atrás</a>");
    } else {
        $query2= "DELETE FROM ciudades WHERE ciudad = '$ciudad' ";
        mysqli_query($link, $query2);
        echo("La ciudad ha sido borada<br>");
        echo("<a href='menu.html'>Volver al Menú</a>");
    }
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</body>
</html>