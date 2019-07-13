<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Former\Former;

$gov = new Former();

$data = $gov->set($_GET);
$gov->restore_principle($data);
?>