<?php
include '../../config/conexion.php';

$n=$_POST['nombres'];
$u=$_POST['usuario'];
$p=md5($_POST['password']);

mysqli_query($conn,"INSERT INTO usuarios(nombres,usuario,password,estado) 
VALUES('$n','$u','$p','ACTIVO')");

echo "<script>
alert('Registro guardado');
window.location='index.php';
</script>";
?>