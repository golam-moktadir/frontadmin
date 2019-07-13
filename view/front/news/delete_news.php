<?php 

include_once '../../../vendor/autoload.php';
use App\Front\News\News;

$gov = new News();

$data = $gov->set($_GET);
$gov->delete($data);
?>