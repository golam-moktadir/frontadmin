<?php 
namespace App\Front\Parents;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Parents extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('guide', $data)){
			$this->guide = $data['guide'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/guide/'.$image);
		return $image;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into parents (guide,status,unique_id,created_at) values(:guide,:status,:unique_id,:created_at)");
		$query->bindValue(':guide', $this->guide, PDO::PARAM_STR);
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		
		if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='parents.php'</script>";
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from parents where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from parents where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from guide where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/guide/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/guide/'.$data['image'])){
			unlink('../uploads/guide/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		$query = $this->con->prepare("update parents set guide=:guide,updated_at=:updated_at where status=:status and unique_id=:id");
	
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':guide', $this->guide, PDO::PARAM_STR);
		$query->bindValue(':updated_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message']="You have updated information";
			echo "<script>window.location='parents.php'</script>";
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update parents set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have deleted Information";
			echo "<script>window.open('parents.php','_self')</script>";
		}
	}

}