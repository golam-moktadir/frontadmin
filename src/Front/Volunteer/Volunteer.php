<?php 
namespace App\Front\Volunteer;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Volunteer extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('volunteer_name', $data)){
			$this->volunteer_name = $data['volunteer_name'];
		}
		if(array_key_exists('class_name', $data)){
			$this->class_name = $data['class_name'];
		}
		if(array_key_exists('section', $data)){
			$this->section = $data['section'];
		}
		if(array_key_exists('class_roll', $data)){
			$this->class_roll = $data['class_roll'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/volunteer/'.$image);
		return $image;
	}
	public function insert(){
		
		if(empty($this->image)){
			
			$query = $this->con->prepare("insert into volunteer (volunteer_name,class_name,section,class_roll,unique_id,created_at) values(:volunteer_name,:class_name,:section,:class_roll,:unique_id,:created_at)");
			$query->bindValue(':volunteer_name', $this->volunteer_name, PDO::PARAM_STR);
			$query->bindValue(':class_name', $this->class_name, PDO::PARAM_STR);
			$query->bindValue(':section', $this->section, PDO::PARAM_STR);
			$query->bindValue(':class_roll', $this->class_roll, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
		}
		else{	
			$query = $this->con->prepare("insert into volunteer (volunteer_name,class_name,section,class_roll,image,unique_id,created_at) values(:volunteer_name,:class_name,:section,:class_roll,:image,:unique_id,:created_at)");
			$query->bindValue(':volunteer_name', $this->volunteer_name, PDO::PARAM_STR);
			$query->bindValue(':class_name', $this->class_name, PDO::PARAM_STR);
			$query->bindValue(':section', $this->section, PDO::PARAM_STR);
			$query->bindValue(':class_roll', $this->class_roll, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from volunteer where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from volunteer where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from volunteer where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/volunteer/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/volunteer/'.$data['image'])){
			unlink('../uploads/volunteer/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){
			$query = $this->con->prepare("update volunteer set volunteer_name=:volunteer_name,class_name=:class_name,section=:section,class_roll=:class_roll,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':volunteer_name', $this->volunteer_name, PDO::PARAM_STR);
			$query->bindValue(':class_name', $this->class_name, PDO::PARAM_STR);
			$query->bindValue(':section', $this->section, PDO::PARAM_STR);
			$query->bindValue(':class_roll', $this->class_roll, PDO::PARAM_STR);
			$query->bindValue(':updated_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->execute();
			if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='volunteer.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update volunteer set volunteer_name=:volunteer_name,class_name=:class_name,section=:section,class_roll=:class_roll,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':volunteer_name', $this->volunteer_name, PDO::PARAM_STR);
			$query->bindValue(':class_name', $this->class_name, PDO::PARAM_STR);
			$query->bindValue(':section', $this->section, PDO::PARAM_STR);
			$query->bindValue(':class_roll', $this->class_roll, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='volunteer.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update volunteer set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('volunteer.php','_self')</script>";
		}
	}

}