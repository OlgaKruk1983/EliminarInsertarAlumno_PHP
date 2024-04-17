<?php
$conexion = mysqli_connect("localhost","root","","base1") or die("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO alumnos(nombre, email, codigo)VALUES('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[codigo])") or die("problema en la select: " .mysqli_error($conexion));

mysqli_close($conexion);
echo "el alumno fue dado de alta";


?>