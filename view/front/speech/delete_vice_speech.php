<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Vice_speech\Vice_speech;

$gov = new Vice_speech();

$data = $gov->set($_GET);
$gov->delete($data);
?>