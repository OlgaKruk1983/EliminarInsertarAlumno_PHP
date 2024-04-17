<?php
$conexion = mysqli_connect("localhost","root","","base1") or die("problema con la conexion");

$registros = mysqli_query($conexion, "SELECT codigo, nombre, email FROM alumnos") or die("problemas con la seleccion: " . mysqli_error($conexion));

while($reg =mysqli_fetch_array($registros)){
    echo "codigo del estudiante " . $reg['codigo'] . "<br>";
    echo "nombre del estudiante " . $reg['nombre'] . "<br>";
    echo "email del estudiante " . $reg['email'] . "<br>";
}

mysqli_close($conexion);


?>