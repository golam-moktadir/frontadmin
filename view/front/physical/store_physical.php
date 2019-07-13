<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Physical\Physical;

$gov = new Physical();

$data = $gov->set($_POST);	
$gov->insert($data);	

?>