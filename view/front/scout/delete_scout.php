<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Scout\Scout;

$gov = new Scout();

$data = $gov->set($_GET);
$gov->delete($data);
?>