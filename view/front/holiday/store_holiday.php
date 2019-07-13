<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Holiday\Holiday;

$gov = new Holiday();

if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$gov->set($_POST);
	$gov->insert();
}
?>