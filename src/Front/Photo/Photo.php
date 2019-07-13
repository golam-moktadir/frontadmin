<?php 
namespace App\Front\Photo;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Photo extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){

		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('caption', $data)){
			$this->caption = $data['caption'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
		
	public function first_upload($file){
		
		// echo "<pre>";
		// print_r($file['name'][0]);
		// die();
		for($i = 0; $i < count($file['name']); $i++){
			$image = rand(10000,90000).$file['name'][$i];
			move_uploaded_file($file['tmp_name'][$i], '../uploads/photo/'.$image);	
		}	
		
	}
	public function insert($post,$file){
		
		for($i = 0; $i < count($file['name']); $i++){
			$image = rand(10000,90000).$file['name'][$i];
			move_uploaded_file($file['tmp_name'][$i], '../uploads/photo/'.$image);	

			$query = $this->con->prepare("insert into photo (caption,image,status,unique_id,created_at) values(:caption,:image,:status,:unique_id,:created_at)");

			$query->bindValue(':caption', $post['caption'], PDO::PARAM_STR);
			$query->bindValue(':image', $image, PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);		
			$query->execute();
		}
		$_SESSION['message']="You have inserted information";
		echo "<script>window.location='photo.php'</script>";
			
	}
	public function view(){
		$query = $this->con->prepare("select * from photo where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from photo where status=:status and id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from photo where status=:status and id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/photo/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/photo/'.$data['image'])){
			unlink('../uploads/photo/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){

			$query = $this->con->prepare("update photo set caption=:caption,updated_at=:updated_at where status=:status and id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':caption',$this->caption, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
	
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='photo.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update photo set caption=:caption,image=:image,updated_at=:updated_at where status=:status and id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':caption',$this->caption, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->bindValue(':status',1, PDO::PARAM_INT);
			
			if($query->execute()){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='photo.php'</script>";
			}
		}
	
	}
	public function delete(){
		$query = $this->con->prepare("update photo set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have deleted Information";
			echo "<script>window.open('photo.php','_self')</script>";
		}
	}

}