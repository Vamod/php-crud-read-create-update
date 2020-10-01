<?php
// $conn segnaposto per connessione
function getAll($conn, $table){
    $sql = "SELECT * FROM $table";

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
        $results = [];
    } else {
        $results = false;
    }


    //al termine chiudo la connessione
    $conn->close();
    return $results;

}

function removeId($conn,$table,$id,$basepath){
    $sql = "DELETE FROM $table WHERE id = ?"; //si possono usare o meno i backtip

    $stmt = $conn->prepare($sql);
    // i è un intero per la stringa è s, è un placeholder
    // bind_param se il tipo dato non è giusto restiuisce 0
    $stmt->bind_param("i", $id);

    $stmt-> execute();


    if ($stmt && $stmt->affected_rows > 0){
        header("Location: $basepath/index2.php?roomId=$id");
    } else {
        echo $stmt->error;
    }


    //al termine chiudo la connessione
    $stmt->close();
    $conn->close();
}

function getId($conn, $table, $id){
    $sql = "SELECT * FROM $table WHERE id = $id"; //si possono usare o meno i backtip
    $result = $conn->query($sql);

    //se esiste e se le righe sono maggiori di zero
    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
    } elseif($result) {
        $row = "";
    } else {
        $row = false;
    }

    //al termine chiudo la connessione
    $conn->close();
    return $row;
}
