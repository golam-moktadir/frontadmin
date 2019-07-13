<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Facility\Facility;

$gov = new Facility();

$data = $gov->set($_GET);
$gov->delete($data);
?>