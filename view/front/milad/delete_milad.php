<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Milad\Milad;

$gov = new Milad();

$data = $gov->set($_GET);
$gov->delete($data);
?>