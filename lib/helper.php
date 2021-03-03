<?php


/**
 * Function for basic field validation (present and neither empty nor only white space
 * @param string $str 
 * @return boolean 
 */
function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}

/**
 * pulisce una stringa da eventuali ritorni a capo
 * @param string $string stringa da ripulire
 * @return string stringa ripulita
 */
function clearString($string){
   return preg_replace("/\r\n|\r|\n/",'<br/>',$string);
}

/**
 * trasforma un result set in un json
 * @param object $object result set da trsformare
 * @return string json rappresentante il resultset
 */
function fromDaoToDTO($object){
    $resString="";
    $count=0;
    if ($object) {
        // output data of each row
        $resString=$resString .  '{"data":[';
        while ($row = mysqli_fetch_array($object)) {
      
            if ($count != 0){
                $resString=$resString . ",";
            }
            $count++;
            
            $resString=$resString .  json_encode($row);
        }
        $resString=$resString .  "]}";
    } else {
        $resString=$resString .  '{"data":[]}';
        
    }
    return $resString;
}