<?php
session_start();

unset($_SESSION['idutente']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['mansione']);

session_unset();
session_destroy();
header("Location:index.php");
?>			
	