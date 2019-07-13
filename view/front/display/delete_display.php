<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Display\Display;

$gov = new Display();

$data = $gov->set($_GET);
$gov->delete($data);
?>