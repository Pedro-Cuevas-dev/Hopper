<?php

session_start();

//verificar si el usuario ha iniciado sesion
if(!isset($_SESSION['username'])){
    header("location: ../index.html");
    exit();
} 
?>