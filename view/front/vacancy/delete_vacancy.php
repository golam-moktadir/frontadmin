<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Vacancy\Vacancy;

$gov = new Vacancy();

$data = $gov->set($_GET);
$gov->delete($data);
?>