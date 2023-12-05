<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$contra = "";
$basedatos = "cotizaciones";

// Crear conexion
$conn = new mysqli($servidor, $usuario, $contra, $basedatos);

// Verificar
if ($conn->connect_error) {
    die("mensaje". $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (username, password) VALUES ('{$_POST[username]}', '{$_POST[password]}')";

mysqli_query($conn, $insertSQL);

if (($result = mysqli_query($conn, $insertSQL)) === false) {
    die(mysqli_error($conn));
}

?>