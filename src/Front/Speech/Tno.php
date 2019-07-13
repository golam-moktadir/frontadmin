<?php 
namespace App\Front\Speech;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Tno extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('speech', $data)){
			$this->speech = $data['speech'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/speech/'.$image);
		return $image;
	}
	public function insert(){
		//tno = 1,11	
		if(empty($this->image)){
			$query = $this->con->prepare("insert into speech (name,speech,status,unique_id,created_at) values(:name,:speech,:status,:unique_id,:created_at)");
			
			$query->bindValue(':name', $this->name, PDO::PARAM_STR);
			$query->bindValue(':speech', $this->speech, PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);

			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='tno_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("insert into speech (name,speech,image,status,unique_id,created_at) values(:name,:speech,:image,:status,:unique_id,:created_at)");

			$query->bindValue(':name', $this->name, PDO::PARAM_STR);
			$query->bindValue(':speech', $this->speech, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='tno_speech.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from speech where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from speech where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from speech where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/speech/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/speech/'.$data['image'])){
			unlink('../uploads/speech/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){

			$query = $this->con->prepare("update speech set name=:name,speech=:speech,updated_at=:updated_at where status=:status and unique_id=:id");

			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':name',$this->name, PDO::PARAM_STR);
			$query->bindValue(':speech',$this->speech, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='tno_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update speech set name=:name, speech=:speech, image=:image, updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':name',$this->name, PDO::PARAM_STR);
			$query->bindValue(':speech',$this->speech, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->bindValue(':status',1, PDO::PARAM_INT);
			
			if($query->execute()){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='tno_speech.php'</script>";
			}
		}
	}
	public function delete(){
		$query = $this->con->prepare("update speech set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',11, PDO::PARAM_STR);	
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('tno_speech.php','_self')</script>";
		}
	}

}