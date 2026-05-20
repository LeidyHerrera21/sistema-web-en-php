<?php
include '../config/conexion.php';
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM usuarios WHERE id='$id'");
$r=mysqli_fetch_array($sql);

if(isset($_POST['actualizar'])){
$n=$_POST['nombres'];
$u=$_POST['usuario'];

mysqli_query($conn,"UPDATE usuarios SET nombres='$n',usuario='$u' WHERE id='$id'");
header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Editar Usuario</h2>
<form method="POST">
<input type="text" name="nombres" value="<?php echo $r['nombres']; ?>" class="form-control mb-3">
<input type="text" name="usuario" value="<?php echo $r['usuario']; ?>" class="form-control mb-3">
<button name="actualizar" class="btn btn-primary">Actualizar</button>
</form>
</body>
</html>