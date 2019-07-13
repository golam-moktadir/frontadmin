<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Guideline\Guideline;

$gov = new Guideline();

$data = $gov->set($_GET);
$gov->delete($data);
?>