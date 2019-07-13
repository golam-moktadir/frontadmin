<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Law\Law;

$gov = new Law();

$data = $gov->set($_GET);
$gov->delete($data);
?>