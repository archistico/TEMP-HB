<?php
session_start();
if (!isset($_SESSION['idutente'])) 
{
	header("Location:index.php");
}
?>			
	