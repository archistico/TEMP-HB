<?php

require('../database.php');

$query = "select collana, idcollana from collane where cancellato=0 order by collana";
$result = $conn->query($query) or die($conn->error . __LINE__);

$riga = 1;

echo '[';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "{";
        echo '"collana":"'.htmlentities(utf8_encode($row['collana']), 0, "UTF-8").'",';
        echo '"idcollana":"'.$row['idcollana'].'"';
        
        if($riga < ($result->num_rows))
            echo "},";
        else
            echo "}";
        
        $riga++;
    }
}

echo "]";

$conn->close();
?>

