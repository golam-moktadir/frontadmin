<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Calender\Calender;

$gov = new Calender();

$data = $gov->set($_GET);
$gov->delete($data);
?>