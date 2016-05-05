<?php

//Remoto?
$remoto = false;

if (!$remoto) {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "helpbookdb";
} else {
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//echo '<div class="alert alert-success" role="alert"> <strong>OK!</strong> Connessione al database attiva. </div>';
?> 			
	
