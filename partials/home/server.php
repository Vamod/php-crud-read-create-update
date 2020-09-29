<?php
include __DIR__ .'/../database.php';

$sql = "SELECT id, room_number, floor FROM stanze"; //si possono usare o meno i backtip

$result = $conn->query($sql);

//se esiste e se le righe sono maggiori di zero
if($result && $result->num_rows > 0){
    // creo array per memorizzare
    $results = [];
    //crea un array associativo
    while($row = $result->fetch_assoc()){
        $results[] = $row;
    }
    
} elseif($result) {
    echo "0 results";
} else {
    echo "query error";
}


//al termine chiudo la connessione
$conn->close();
 ?>
