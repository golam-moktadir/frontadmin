<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Sports\Sports;

$gov = new Sports();

$data = $gov->set($_GET);
$gov->delete($data);
?>