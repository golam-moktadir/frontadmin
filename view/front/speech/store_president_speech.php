<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Speech\President;

$gov = new President();

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