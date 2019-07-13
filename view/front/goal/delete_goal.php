<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Goal\Goal;

$gov = new Goal();

$data = $gov->set($_GET);
$gov->delete($data);
?>