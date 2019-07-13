<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Admission\Admission;

$gov = new Admission();

$data = $gov->set($_GET);
$gov->delete($data);
?>