<?php
include __DIR__ .'/../database.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id = $_GET['id'];

$sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id"; //si possono usare o meno i backtip
$result = $conn->query($sql);

//se esiste e se le righe sono maggiori di zero
if($result && $result->num_rows > 0){

    $row = $result->fetch_assoc();


} elseif($result) {
    echo "0 results";
} else {
    echo "query error";
}


//al termine chiudo la connessione
$conn->close();
 ?>
