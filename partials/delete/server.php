<?php
include __DIR__ .'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}

$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = $id"; //si possono usare o meno i backtip
$result = $conn->query($sql);

if ($result){
    echo 'ok';
} else {
    'ko';
}


//al termine chiudo la connessione
$conn->close();
 ?>
