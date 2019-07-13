<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Result\Result;

$gov = new Result();

$data = $gov->set($_GET);
$gov->delete($data);
?>