<?php
include __DIR__.'/env.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
    //connect_error mi fa vedere il tipo di errore
echo "Connection failed: " . $conn->connect_error;

die();
}
