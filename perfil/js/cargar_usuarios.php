<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "cotizaciones";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
	die("No hay conexión: ".$conn->connect_error);
}

$sql="SELECT * FROM cliente";
$result=$conn->query($sql);

// Generar la tabla de usuarios con acciones de edición y eliminación
if($result->num_rows > 0) {
    while ($row = $result -> Fetch_assoc()) {
        echo "
            <li><span>Numero de Cliente: </span>{$row['id_client']}</li>
            <li><span>Nombre: </span>{$row['nombre']}  {$row['apellido']}</li>
            <li><span>Correo: </span>{$row['correo']}</li>
            
            <td>
                <button onclick='mostrarDatosTarjeta(
                    \"{$row['tarjeta']}\", 
                    \"{$row['cvv']}\",
                    \"{$row['expiracion']}\",
                    )'>Mostrar</button>
            </td>";
    }
} else {
    echo "<tr><td colspan='8'>No hay usuarios</td></tr>";
}
$conn->close();
?>