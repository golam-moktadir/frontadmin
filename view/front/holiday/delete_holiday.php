<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Holiday\Holiday;

$gov = new Holiday();

$gov->set($_GET);
$gov->delete();
?>