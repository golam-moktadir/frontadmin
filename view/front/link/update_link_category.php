<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Link\Link_category;

$gov = new Link_category();

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