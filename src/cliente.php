<?php
// mostriamo il resultset in formato JSON
require_once 'dao.php';
require_once '../lib/helper.php';

$cliente=null;
$cliente=getDaoByKey("Clienti","");

echo fromDaoToDTO($cliente);