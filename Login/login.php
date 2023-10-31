<?php
session_start(); // Iniciar la sesión

$servidor = "localhost"; // Definir el nombre del servidor de la base de datos
$usuario = "root"; // Definir el nombre de usuario para la base de datos
$contra = ""; // Definir la contraseña para la base de datos
$basedatos = "login"; // Definir el nombre de la base de datos

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contra, $basedatos); // Establecer una conexión con la base de datos

// Verificar la conexión
if ($conn->connect_error) {
    die("mensaje". $conn->connect_error); // Mostrar un mensaje de error si la conexión falla
}

$username = $_POST['username']; // Obtener el nombre de usuario del formulario
$password = $_POST['password']; // Obtener la contraseña del formulario

// Consulta SQL para buscar el nombre de usuario y la contraseña en la base de datos
$sql = "SELECT username, password FROM usuario WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql); // Ejecutar la consulta SQL y almacenar el resultado

// Verificar si la consulta devuelve algún resultado
if ($result->num_rows > 0) {
    $_SESSION["username"]= $username; // Iniciar sesión y almacenar el nombre de usuario en la variable de sesión
    header("location: ../index.php"); // Redirigir al usuario a la página de inicio si la sesión es exitosa
} else {
    echo "Inicio de sesion fallida. <a href = '../login.php'> Intentar de nuevo </a>"; // Mostrar un mensaje de error si el inicio de sesión falla y proporcionar un enlace para intentar iniciar sesión nuevamente
}

$conn->close(); // Cerrar la conexión con la base de datos
?>
