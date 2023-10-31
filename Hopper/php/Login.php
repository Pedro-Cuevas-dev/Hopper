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

// consulta

$sql = "SELECT username, password FROM usuarios WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION["username"]= $username;
    header("location: Datos.php");
} else {
       echo "Inicio de sesion fallida. <a href = '../index.html'> Intentar de nuevo </a>";

}
$conn ->close();
?>