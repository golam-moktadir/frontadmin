<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link_category;

$gov = new Link_category();

$data = $gov->set($_GET);
$gov->delete();
?>