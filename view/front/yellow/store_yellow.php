<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Yellow\Yellow;

$gov = new Yellow();

if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$data = $gov->set($_POST);
	$gov->insert($data);
}
else{
	$data = $gov->set($_POST);	
	$gov->insert($data);	
}
?>