<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Link\Link;

$gov = new Link();

// echo "<pre>";
// print_r($_POST);

// die();
if(!empty($_FILES['image']['name'])){
	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$data = $gov->set($_POST);
	$gov->update($data);
}
else{
	$data = $gov->set($_POST);
	$gov->update();
}
?>