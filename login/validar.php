<?php 
session_start();
include '../config/conexion.php';

$user=$_POST ['usuario'];
$pass=md5($_POST["password"]);

$sql=mysqli_query($conn,"SELECT * FROM usuario WHERE usuario='$user' AND password='$pass'");

if (mysqli_num_rows($sql)>0) {
    $_SESSION['usuario']=$user;
    header('Location: ../principal/dashboard.php');
} else {
    echo "<script>alert('Datos incorrectos');window.location='inde.php';</script>";
}

?>