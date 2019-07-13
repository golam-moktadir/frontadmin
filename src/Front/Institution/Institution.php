<?php 
namespace App\Front\Institution;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Institution extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('institution_name', $data)){
			$this->institution_name = $data['institution_name'];
		}
		if(array_key_exists('village', $data)){
			$this->village = $data['village'];
		}
		if(array_key_exists('post_office', $data)){
			$this->post_office = $data['post_office'];
		}
		if(array_key_exists('thana', $data)){
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('history', $data)){
			$this->history = $data['history'];
		}
		if(array_key_exists('founded', $data)){
			$this->founded = $data['founded'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/institution/'.$image);
		return $image;
	}
	public function insert(){
			
		if(empty($this->image)){
			$query = $this->con->prepare("insert into institution (institution_name,village,post_office,thana,district,history,founded,unique_id,created_at) values(:institution_name,:village,:post_office,:thana,:district,:history,:founded,:unique_id,:created_at)");

			$query->bindValue(':institution_name', $this->institution_name, PDO::PARAM_STR);
			$query->bindValue(':village', $this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office', $this->post_office, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':history', $this->history, PDO::PARAM_STR);
			$query->bindValue(':founded', $this->founded, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);

			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='institution_history.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("insert into institution (institution_name,village,post_office,thana,district,history,image,founded,unique_id,created_at) values(:institution_name,:village,:post_office,:thana,:district,:history,:image,:founded,:unique_id,:created_at)");
		
			$query->bindValue(':institution_name', $this->institution_name, PDO::PARAM_STR);
			$query->bindValue(':village', $this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office', $this->post_office, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':history', $this->history, PDO::PARAM_STR);
			$query->bindValue(':founded', $this->founded, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='institution_history.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from institution where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from institution where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from institution where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/institution/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/institution/'.$data['image'])){
			unlink('../uploads/institution/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){

			$query = $this->con->prepare("update institution set institution_name=:institution_name,village=:village,post_office=:post_office,thana=:thana,district=:district,history=:history,founded=:founded,updated_at=:updated_at where status=:status and unique_id=:id");

			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':institution_name', $this->institution_name, PDO::PARAM_STR);
			$query->bindValue(':village', $this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office', $this->post_office, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':history', $this->history, PDO::PARAM_STR);
			$query->bindValue(':founded', $this->founded, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
	
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='institution_history.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update institution set institution_name=:institution_name,village=:village,post_office=:post_office,thana=:thana,district=:district,history=:history,image=:image,founded=:founded,updated_at=:updated_at where status=:status and unique_id=:id"); 

			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':institution_name', $this->institution_name, PDO::PARAM_STR);
			$query->bindValue(':village', $this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office', $this->post_office, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':history', $this->history, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':founded', $this->founded, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			
			if($query->execute()){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='institution_history.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update institution set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('institution_history.php','_self')</script>";
		}
	}

}