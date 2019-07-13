<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Speech\Speech;

$gov = new Speech();

$data = $gov->set($_GET);
$gov->delete($data);
?>