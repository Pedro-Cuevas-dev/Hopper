<!DOCTYPE html>
<html>
<head>
    <meta charset="Utf-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/perfil-styles.css">
</head>
<body>
    <div id="DivDatos">
        <div class="DivEstilo">
            
        </div>
    </div>

    <!-- Formulario de Edición de Usuario -->
    <div id="modalEditar" style="display:none;">
        <h3>Datos de Tarjeta</h3>
        <form id="mostrarDatosTarjeta">
            <!-- Campos de edición: id_usuario, usuario, contrasena -->
            Tarjeta: <span id="showTarjeta"></span><br>
            CVV: <span id="showCvv"></span><br>
            Expiracion: <span id="showExpiracion"></span><br>
            <button type="button" onclick="guardarEdicion()">Cerrar</button>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            // Cargar la lista de usuarios al cargar la página
            cargarUsuarios();
        });

        function cargarUsuarios() {
            $.ajax({
                url:'../js/cargar_usuarios.php',
                type:'Get',
                success:function(response) {
                    $('#DivDatos').html(response);
                }
            });
        }

        function mostrarDatosTarjeta(tarjeta, cvv, expiracion) {
            // Llenar los campos del formulario de edición
            document.getElementById('showTarjeta').innerText = tarjeta;
            document.getElementById('showCvv').innerText = cvv;
            document.getElementById('showExpiracion').innerText = expiracion;

            // Mostrar la ventana modal de edición
            document.getElementById('modalEditar').style.display ='block';  
        }

        function guardarEdicion() {
            // Obtener los datos del formulario de edición
            var id_usuario = document.getElementById('editId_usuario').innerText;
            var nombre = document.getElementById('editNombre').value;
            var correo = document.getElementById('editCorreo').value;
            var contrasena = document.getElementById('editContrasena').value;

            // Enviar los datos editados al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'guardaredicion.php',
                data:{
                    id_usuario,
                    nombre,
                    correo,
                    contrasena
                    
                },
                success: function(response) {
                    alert('Usuario editado correctamente');
                    document.getElementById('modalEditar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la edición
                    cargarUsuarios();
                }
            }); 
        }

        function eliminarUsuario(id_usuario) {
            if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
                // Enviar la solicitud para eliminar el usuario al servidor usando AJAX
                $.ajax({
                    type: 'POST',
                    url: 'eliminar_usuarios.php',
                    data: {
                        id_usuario: id_usuario
                    },
                    success: function (response) {
                        alert(response);
                        // Actualizar la lista de usuarios después de la eliminación
                        cargarUsuarios();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Error al intentar eliminar el usuario.");
                    }
                });
                
            }
            
        }
    </script>
</body>
</html>