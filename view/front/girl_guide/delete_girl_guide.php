<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Girl_guide\Girl_guide;

$gov = new Girl_guide();

$data = $gov->set($_GET);
$gov->delete($data);
?>