<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

// mi restituisce un array associativo richiamato da functions.php
//$results lo uso per estrapolare i dati nella index
//devo necessariamente memorizzare la funzione in una variabile il var_dump(non legge la funzione)
$results = getAll($conn, 'stanze');
