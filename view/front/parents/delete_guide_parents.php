<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Parents\Parents;

$gov = new Parents();

$data = $gov->set($_GET);
$gov->delete($data);
?>