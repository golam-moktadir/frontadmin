<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Admission_result\Admission_result;

$gov = new Admission_result();

$data = $gov->set($_GET);
$gov->delete($data);
?>