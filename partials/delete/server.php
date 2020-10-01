<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

if(empty($_POST['id'])){
    die('nessun id');
}

$id = $_POST['id'];

// sta solo eseguendo non c'è bisogno di creare una variabile
// no return
removeId($conn,'stanze',$id,$basepath);
