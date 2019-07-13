<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Culture\Culture;

$gov = new Culture();

$data = $gov->set($_GET);
$gov->delete($data);
?>