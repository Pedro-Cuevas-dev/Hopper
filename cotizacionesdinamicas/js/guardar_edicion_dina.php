<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "cotizaciones";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()) {
    die("Conexion fallida: ".$conn->connect_error);
}

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];


// Actualizar el usuario en la base de datos
$sqlupdate = "UPDATE productos SET
    nombre='$nombre',
    descripcion='$descripcion',
    precio='$precio',
    stock='$stock'
    WHERE id_producto='$id_producto'";

if ($conn->query($sqlupdate) === TRUE) {
    echo "Producto actualizado correctamente";
} else {
    echo "Error al actualizar el producto: " . $conn->error;
}

$conn->close();
?>
