<?php

/**
 * scrive come al primo posto la data/ora attuale, poi il loglevel e poi il messaggio
 * es.
 * 03/03/2021 16:22 DEBUG messaggio di debug
 * 03/03/2021 16:23 DEBUG messaggio di debug ulteiroire
 * @param $loglevel il livello di log, può essere [INFO|DEBUG|ERROR]
 * @param $message il mesaggio da loggare
 */
function writeOnFile($loglevel, $message){
    // apro il file
    $myfile=fopen("log.txt","a") or die("non possiam ocreare il file");
    $now = new DateTime();
    // scrivo il log formattato
    fwrite($myfile,$now->format('Y-m-d H:i:s')." - ". $loglevel . " - " . $message . PHP_EOL);
    // chiudo il file
    fclose($myfile);
}

function logInfo($messagio){
    writeOnFile("INFO", $messagio);
}

function logDebug($messagio){
    writeOnFile("DEBUG", $messagio);
}

function logError($messagio){
    writeOnFile("ERROR", $messagio);
}
