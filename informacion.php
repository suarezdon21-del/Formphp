<?php
$nombre    = $_POST['nombre'];
$edad      = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario   = $_POST['salario'];
$correo    = $_POST['correo'];
$cargo     = $_POST['cargo'];

echo "<h2>Informacion Recibida</h2>";
echo "El empleado $nombre tiene $edad años.<br>";
echo "Vive en $direccion y su salario es $salario.<br>";
echo "Su correo es $correo y el cargo que cuenta es de $cargo.";
?>
