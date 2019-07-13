<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Library\Library;

$gov = new Library();

$data = $gov->set($_GET);
$gov->delete($data);
?>