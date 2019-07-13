<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Achievement\Achievement;

$gov = new Achievement();

$data = $gov->set($_GET);
$gov->delete($data);
?>