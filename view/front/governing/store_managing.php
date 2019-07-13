<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Governing\Governing;

$gov = new Governing();

if(!empty($_FILES['image'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$data = $gov->set($_POST);
	$gov->insert($data);
}
?>