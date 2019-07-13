<?php 
namespace App\Front\Facility;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Facility extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('facility', $data)){
			$this->facility = $data['facility'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(20000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/facility/'.$image);
		return $image;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into facility (facility,unique_id,created_at) values(:facility,:unique_id,:created_at)");
		$query->bindValue(':facility', $this->facility, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);

		if($query->execute()){
			$_SESSION['message'] = "You Have Inserted Information";
			echo "<script>window.open('facility.php','_self')</script>";
		}
			
	}
	public function view(){
		$query = $this->con->prepare("select * from facility where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from facility where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from facility where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(20000,90000).$file['name'];
		$moving = '../uploads/facility/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/facility/'.$data['image'])){
			unlink('../uploads/facility/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){
	
		$query = $this->con->prepare("update facility set facility=:facility,updated_at=:updated_at where status=:status and unique_id=:id");
		
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':facility', $this->facility, PDO::PARAM_STR);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
		
		if($query->execute()){
			$_SESSION['message'] = "You have updated information";
			echo "<script>window.location='facility.php'</script>";
		}
		
	}
	public function delete($id){
		$query = $this->con->prepare("update facility set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('facility.php','_self')</script>";
		}
	}

}