<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost","root","","base1") or die("problema con la conexion");

    $registros = mysqli_query($conexion, "SELECT codigo from alumnos where email='$_REQUEST[email]'") or die("problema en la select: " . mysqli_error($conexion));

    if($reg = mysqli_fetch_array($registros)){
        mysqli_query($conexion, "DELETE from alumnos where email='$_REQUEST[email]'") or die("problema en la select" . mysqli_error($conexion));
        echo "se eliminó correctamente";
    }else{
        echo "no existe el email";

    }

    mysqli_close($conexion);
    
    
    ?>
    





</body>
</html>