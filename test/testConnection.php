<?php
require_once '../src/connection.php';

// proviamo la connessione al DB
$conn=null;
$conn=connect();
if (!$conn){
    echo "la connessione è nulla";
}else{
    echo "connessione valorizzata";

    closeConnection($conn);
}