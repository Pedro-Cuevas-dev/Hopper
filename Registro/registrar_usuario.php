<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = ""; // Contraseña de tu base de datos
    $dbname = "login"; // Nombre de tu base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $username_input = $_POST['username'];
    $password = $_POST['password'];

    // mysqli_real_escape_string : se utiliza para escapar los valores de usuario y contraseña antes de 
    //realizar consultas a la base de datos. Esto es importante porque evita que los datos ingresados por 
    //el usuario se interpreten como parte del lenguaje SQL, lo que podría dar lugar a consultas maliciosas 
    //que comprometan la seguridad de la base de datos.
    
    // Al llamar a mysqli_real_escape_string: la función examina la cadena y escapa los caracteres especiales, 
    //como comillas simples, comillas dobles y caracteres nulos, colocando barras invertidas delante de ellos.
    // Esto garantiza que la consulta SQL resultante se ejecute correctamente y no sea manipulada por datos 
    //maliciosos ingresados por el usuario.


    // Escapar los valores para evitar inyecciones de SQL
    $username = mysqli_real_escape_string($conn, $username_input);
    $password = mysqli_real_escape_string($conn, $password);

    // Consulta para verificar si el usuario ya existe
    $check_user_query = "SELECT * FROM usuario WHERE username = '$username'";
    $check_result = $conn->query($check_user_query);

    if ($check_result->num_rows > 0) {
        // El usuario ya existe
        header("Location: ../fallo_registro.php");
        exit();
    } else {
        // El usuario no existe, se puede proceder con la inserción
        $insert_query = "INSERT INTO usuario (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            // Redirigir al usuario a la página de registro exitoso
        header("Location: ../regist_exitoso.php");
            exit(); // Añadido el exit aquí
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
