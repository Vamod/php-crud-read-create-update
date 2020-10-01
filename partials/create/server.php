<?php include __DIR__.'/../database.php';
// prendo il valore del name in $_POST
if(empty($_POST['roomNumber'])){
    die('non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
    die('non hai inserito il piano');
}

if(empty($_POST['beds'])){
    die('non hai inserito il numero dei letti');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?,?,?,NOW(),NOW())";
// PREPARED STATEMENTS
// prepara la query $sql
$stmt = $conn->prepare($sql);
// sostituisco al posto dei ? i valori
// bind_param restituisce un valore booleano
$stmt->bind_param("iii", $roomN, $floor, $beds);
//definire dopo le variabili
$roomN = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif($stmt){
    die('nessun inserimento');
} else{
    die('errore');
}

$stmt->close();
$conn->close();
