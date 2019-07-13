<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Parliament\Parliament;

$gov = new Parliament();

$data = $gov->set($_GET);
$gov->delete($data);
?>