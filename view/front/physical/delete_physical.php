<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Physical\Physical;

$gov = new Physical();

$gov->set($_GET);
$gov->delete();
?>