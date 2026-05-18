<?php
include '../config/conexion.php';

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=reporte_usuarios.doc");

echo "<h1>Listado de Usuarios</h1>";

echo "<table border='1' width='100%' cellpadding='5'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombres</th>";
echo "<th>Usuario</th>";
echo "<th>Estado</th>";
echo "</tr>";

$sql=mysqli_query($conn,"SELECT * FROM usuarios");

while($r=mysqli_fetch_array($sql)){

echo "<tr>";
echo "<td>".$r['id']."</td>";
echo "<td>".$r['nombres']."</td>";
echo "<td>".$r['usuario']."</td>";
echo "<td>".$r['estado']."</td>";
echo "</tr>";

}

echo "</table>";
?>