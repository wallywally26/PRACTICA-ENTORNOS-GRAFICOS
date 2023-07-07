<html>
<head>
    <title>Listado completo</title>
</head>
<body>
    <?php
    include("conexion.php");
    $query = "SELECT * FROM ciudades";
    $result = mysqli_query($link, $query);
    $registros=mysqli_num_rows($result);
    ?>
    <table border=1>
        <tr>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>¿Tiene Metro?</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo ($fila['ciudad']); ?></td>
            <td><?php echo ($fila['pais']); ?></td>
            <td><?php echo ($fila['habitantes']); ?></td>
            <td><?php echo ($fila['superficie']); ?></td>
            <td><?php if($fila['tieneMetro'] == 0) { echo ('No');} else { echo('Si');}; ?></td>
        </tr>
        <tr>
            <td colspan="5">
                <?php }
                mysqli_free_result($result);
                mysqli_close($link);
                ?>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p align="center"><a href="menu.html">Volver al menú</a></p>
</body>
</html>