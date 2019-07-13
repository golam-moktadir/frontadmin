<?php 

include_once '../../../vendor/autoload.php';
use App\Front\News\News;

$gov = new News();

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