<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Red_cresent\Red_cresent;

$gov = new Red_cresent();

$data = $gov->set($_GET);
$gov->delete($data);
?>