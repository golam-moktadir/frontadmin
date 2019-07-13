<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Video\Video;

$gov = new Video();

if(!empty($_FILES['image']['name'])){
	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$gov->set($_POST);
	$gov->update();
}
else{
	$gov->set($_POST);
	$gov->update();
}
?>