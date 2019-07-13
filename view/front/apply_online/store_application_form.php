<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Apply\Apply;

$gov = new Apply();

// $_POST['image'] = $_FILES['image']['name'];
// echo "<pre>";
// print_r($_POST);
// die();
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