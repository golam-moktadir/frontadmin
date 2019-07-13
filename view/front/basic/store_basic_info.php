<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Basic\Basic;

$gov = new Basic();

if(!empty($_FILES['image']['name']) && !empty($_FILES['school_logo']['name']) && !empty($_FILES['right_logo']['name'])){

	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$_POST['school_logo'] = $gov->logo_upload($_FILES['school_logo']);
	$_POST['right_logo'] = $gov->right_logo_upload($_FILES['right_logo']);
	$gov->set($_POST);
	$gov->insert();	
}
else if(!empty($_FILES['image']['name']) && !empty($_FILES['school_logo']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$_POST['school_logo'] = $gov->logo_upload($_FILES['school_logo']);
	$gov->set($_POST);
	$gov->insert();
}
else if(!empty($_FILES['image']['name']) && !empty($_FILES['right_logo']['name'])){
	
	$_POST['image'] = $gov->logo_upload($_FILES['image']);
	$_POST['right_logo'] = $gov->right_logo_upload($_FILES['right_logo']);
	$gov->set($_POST);
	$gov->insert();	
}
else if(!empty($_FILES['school_logo']['name']) && !empty($_FILES['right_logo']['name'])){
	
	$_POST['school_logo'] = $gov->logo_upload($_FILES['school_logo']);
	$_POST['right_logo'] = $gov->right_logo_upload($_FILES['right_logo']);
	$gov->set($_POST);
	$gov->insert();	
}
else if(!empty($_FILES['image']['name'])){
	
	$_POST['image'] = $gov->image_upload($_FILES['image']);
	$gov->set($_POST);
	$gov->insert();
}
else if(!empty($_FILES['school_logo']['name'])){
	
	$_POST['school_logo'] = $gov->logo_upload($_FILES['school_logo']);
	$gov->set($_POST);
	$gov->insert();
}
else if(!empty($_FILES['right_logo']['name'])){
	
	$_POST['right_logo'] = $gov->logo_upload($_FILES['right_logo']);
	$gov->set($_POST);
	$gov->insert();
}
else{
	$data = $gov->set($_POST);	
	$gov->insert();	
}
?>