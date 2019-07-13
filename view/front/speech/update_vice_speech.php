<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Vice_speech\Vice_speech;

$gov = new Vice_speech();

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