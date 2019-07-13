<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Photo\Photo;

$gov = new Photo();

if(!empty($_FILES['image']['name'])){
	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$data = $gov->set($_POST);
	$gov->update();
}
else{
	$data = $gov->set($_POST);
	$gov->update();
}
?>