<?php
require_once 'log.php';

/**
 * connessione al database di default
 * @return {} la connessione al db di default
 */
function connect(){
    logInfo("funzione connect");

    // inizializzo la variabile connessione
    $conn=null;

    // creo la connessione a mysql
    logDebug("tentativo di connessione al db mysql");
    $conn=mysqli_connect("localhost","root","password","northwind");

    if (mysqli_connect_errno()){
        logError("Errore di connessione ". mysqli_connect_error());
    }else{
        logDebug("Connessione riuscita");
    }

    // restituisco la connessione appena creata
    return $conn;

}

/**
 * rilascia la connessione
 * @param $conn la connessione da chiudere
 */
function closeConnection($conn){
    logInfo("closeConnection");

    if($conn){
        mysqli_close($conn);
    }
}