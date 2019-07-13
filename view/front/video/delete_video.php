<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Video\Video;

$gov = new Video();

$gov->set($_GET);
$gov->delete();
?>