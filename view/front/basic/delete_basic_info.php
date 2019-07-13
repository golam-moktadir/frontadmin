<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Basic\Basic;

$gov = new Basic();

$data = $gov->set($_GET);
$gov->delete($data);
?>