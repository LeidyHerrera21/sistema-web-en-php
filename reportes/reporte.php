<?php
include '../config/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="text-center mb-4">
        <h1>SISTEMA WEB</h1>
        <h3>Listado General de Usuarios</h3>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql=mysqli_query($conn,"SELECT * FROM usuarios");
        while($r=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['nombres']; ?></td>
                <td><?php echo $r['usuario']; ?></td>
                <td><?php echo $r['estado']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="reporte_pdf.php" class="btn btn-danger">
        Exportar PDF
    </a>
    <a href="reporte_word.php" class="btn btn-primary">
        Exportar WORD
    </a>
    <a href="reporte_excel.php" class="btn btn-success">
        Exportar EXCEL
    </a>
</body>
</html>