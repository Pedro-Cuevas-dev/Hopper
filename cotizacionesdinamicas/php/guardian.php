<?php
session_start();

if(!isset($_SESSION['password'])){ //Checa si hay un usuario antes de entrar a la pagina de welcome
    header("Location ../index.html"); 
    session_destroy();
}

?>