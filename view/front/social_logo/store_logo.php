<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Logo\Logo;

$gov = new Logo();

// echo "<pre>";
// print_r($_POST);
// die();
if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$gov->set($_POST);
	$gov->insert();
}
else{
	$gov->set($_POST);	
	$gov->insert();	
}
?>