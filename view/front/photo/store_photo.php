<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Photo\Photo;

$gov = new Photo();

//$data = $gov->set($_POST);
$gov->insert($_POST,$_FILES['image']);

?>