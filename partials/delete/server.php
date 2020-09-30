<?php
include __DIR__ .'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}


$sql = "DELETE FROM stanze WHERE id = ?"; //si possono usare o meno i backtip

$stmt = $conn->prepare($sql);
// i è un intero per la stringa è s, è un placeholder
// bind_param se il tipo dato non è giusto restiuisce 0
$stmt->bind_param("i", $id);
$id = $_POST['id'];
$stmt-> execute();


if ($stmt && $stmt->affected_rows > 0){
    header("Location: $basepath/index2.php?roomId=$id");
} else {
    echo $stmt->error;
}


//al termine chiudo la connessione
$conn->close();
 ?>
