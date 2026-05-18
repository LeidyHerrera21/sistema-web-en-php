<?php
include '../config/conexion.php';

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte_usuarios.xls");

echo "<table border='1'>";
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