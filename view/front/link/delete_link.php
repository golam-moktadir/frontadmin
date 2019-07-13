<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link;

$gov = new Link();

$data = $gov->set($_GET);
$gov->delete();
?>