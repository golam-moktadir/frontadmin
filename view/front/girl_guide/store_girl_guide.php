<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Girl_guide\Girl_guide;

$gov = new Girl_guide();

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