<?php
session_start();
session_unset();
session_unset();
session_destroy();
// "../": salto de carpetas
header("Location:../login.php");   

?>
