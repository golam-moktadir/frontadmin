<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Speech\President;

$gov = new President();

$data = $gov->set($_GET);
$gov->delete($data);
?>