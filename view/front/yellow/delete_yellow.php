<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Yellow\Yellow;

$gov = new Yellow();

$data = $gov->set($_GET);
$gov->delete($data);
?>