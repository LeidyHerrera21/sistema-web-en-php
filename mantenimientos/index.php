<?php include '../../config/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container mt-4">
    <h2>Mantenimiento Usuarios</h2>
    <form method="POST" action="guardar.php">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="nombres" class="form-control" placeholder="Nombres">
            </div>
            <div class="col-md-3">
                <input type="text" name="usuario" class="form-control" placeholder="Usuario">
            </div>
            <div class="col-md-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="col-md-3">
                <button class="btn btn-success">Grabar</button>
            </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Usuario</th>
                <th>Acciones</th>
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
                <td>
                    <a href="editar.php?id=<?php echo $r['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminar.php?id=<?php echo $r['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>