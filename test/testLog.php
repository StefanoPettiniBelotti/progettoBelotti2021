<?php
require_once '../src/log.php';

// testiamo la scrittura di un log d'esempio
writeOnFile("DEBUG","Messagio di test");

// testiamo il log info
logInfo("Messaggio a livello Info");

// testiamo il log debug
logDebug("Messaggio a livello Debug");

// testiamo il log error
logError("Messaggio a livello Error");