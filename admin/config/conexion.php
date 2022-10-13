<?php
$conn = new mysqli("byxumxop92ykjsjhzzlt-mysql.services.clever-cloud.com", "uh5ndolwkdynxo4a", "1gDuGISczeHq5MhqvQf1", "byxumxop92ykjsjhzzlt");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>