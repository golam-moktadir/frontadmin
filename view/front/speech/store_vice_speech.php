<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Vice_speech\Vice_speech;

$gov = new Vice_speech();

if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$data = $gov->set($_POST);
	$gov->insert();
}
else{
	$data = $gov->set($_POST);	
	$gov->insert();	
}
?>