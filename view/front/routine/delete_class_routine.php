<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Routine\Routine;

$gov = new Routine();

$data = $gov->set($_GET);
$gov->delete($data);
?>