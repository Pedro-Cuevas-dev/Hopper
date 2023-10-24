<?php
    session_start();

    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $base_datos = "cotizaciones";
//crear conexion
    $conn = new mysqli($servidor, $usuario, $contra, $base_datos);

//verificar
    if($conn->connect_error){
    die("mensaje".$conn->connect_error);
    }
//obtener datos
    $username = $_POST['username'];
    $password = $_POST['password'];
//consulta
    $sql = "SELECT usuario, contra
    FROM usuarios WHERE 
    usuario='$username' AND
    contra= '$password'";

    $result= $conn ->query($sql);

    if ($result ->num_rows>0){
        $_SESION['username']=$username;
        header("location: ../index.php");
    }else{
        echo "Inicio de sesion fallo. <a href='../index.html'";
    }

    $conn ->close();


