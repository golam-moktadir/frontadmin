<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link_category;

$gov = new Link_category();

if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$data = $gov->set($_POST);
	$gov->insert();
}
else{

	$gov->set($_POST);	
	$gov->insert();	
}
?>