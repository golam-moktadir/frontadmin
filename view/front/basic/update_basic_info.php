<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Basic\Basic;

$gov = new Basic();

if(!empty($_FILES['image']['name']) && !empty($_FILES['school_logo']['name']) && !empty($_FILES['right_logo']['name'])){

	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$_POST['school_logo'] = $gov->update_logo($_POST['id'],$_FILES['school_logo']);
	$_POST['right_logo'] = $gov->update_right_logo($_POST['id'],$_FILES['right_logo']);

	$gov->set($_POST);
	$gov->update();	
}
else if(!empty($_FILES['image']['name']) && !empty($_FILES['school_logo']['name'])){

	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$_POST['school_logo'] = $gov->update_logo($_POST['id'],$_FILES['school_logo']);
	$gov->set($_POST);
	$gov->update();	
}
else if(!empty($_FILES['image']['name']) && !empty($_FILES['right_logo']['name'])){
	
	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$_POST['right_logo'] = $gov->update_right_logo($_POST['id'],$_FILES['right_logo']);
	$gov->set($_POST);
	$gov->update();	
}
else if(!empty($_FILES['school_logo']['name']) && !empty($_FILES['right_logo']['name'])){
	
	$_POST['school_logo'] = $gov->update_logo($_POST['id'],$_FILES['school_logo']);
	$_POST['right_logo'] = $gov->update_right_logo($_POST['id'],$_FILES['right_logo']);
	$gov->set($_POST);
	$gov->update();	
}
else if(!empty($_FILES['image']['name'])){

	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$data = $gov->set($_POST);
	$gov->update();
}
else if(!empty($_FILES['school_logo']['name'])){
	
	$_POST['school_logo'] = $gov->update_logo($_POST['id'],$_FILES['school_logo']);
	$data = $gov->set($_POST);
	$gov->update();	
}
else if(!empty($_FILES['right_logo']['name'])){
	
	$_POST['right_logo'] = $gov->update_right_logo($_POST['id'],$_FILES['right_logo']);
	$data = $gov->set($_POST);
	$gov->update();	
}
else{
	$data = $gov->set($_POST);	
	$gov->update();	
}
?>