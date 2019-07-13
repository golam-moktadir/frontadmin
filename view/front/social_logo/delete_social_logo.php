<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Logo\Logo;

$gov = new Logo();

$gov->set($_GET);
$gov->delete();
?>