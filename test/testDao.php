<?php
// testo il DAO

require_once '../src/dao.php';

// variabile recordset che conterà i clienti
$clienti=null;

//richiamo il dao
$clienti=getDaoByKey("Clienti","");

//verifico il risultato
if ($clienti){
    // l'interrogazione è andata a buon fine
    echo "Numero di righe in clienti:" . mysqli_num_rows($clienti);
}else{
    echo "Errore nell'interrogazione della tabella clienti";
}
