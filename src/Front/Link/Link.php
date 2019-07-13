<?php 
namespace App\Front\Link;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Link extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('title', $data)){
			$this->title = $data['title'];
		}
		if(array_key_exists('web_address', $data)){
			$this->web_address = $data['web_address'];
		}
		if(array_key_exists('category_id', $data)){
			$this->category_id = $data['category_id'];
		}
		return $this;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into link (title,web_address,category_id,unique_id,created_at) values(:title,:web_address,:category_id,:unique_id,:created_at)");
		$query->bindValue(':title', $this->title, PDO::PARAM_STR);
		$query->bindValue(':web_address', $this->web_address, PDO::PARAM_STR);
		$query->bindValue(':category_id', $this->category_id, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You have inserted information";
			echo "<script>window.location='link.php'</script>";
		}			
	}
	public function view(){
		$query = $this->con->prepare("select * from link where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from link where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from title where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['title'];
		$moving = '../uploads/achievement/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_title'], $moving);
		}
		else if(file_exists('../uploads/achievement/'.$data['image'])){
			untitle('../uploads/achievement/'.$data['image']);
			move_uploaded_file($file['tmp_title'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_title'], $moving);
		}
		return $image;
	}
	public function update(){

		
		$query = $this->con->prepare("update link set title=:title,web_address=:web_address,category_id=:category_id,updated_at=:updated_at where status=:status and unique_id=:id");
			
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':title', $this->title, PDO::PARAM_STR);
		$query->bindValue(':web_address',$this->web_address, PDO::PARAM_STR);
		$query->bindValue(':category_id', $this->category_id, PDO::PARAM_STR);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			
		if($query->execute()){
			$_SESSION['message'] = "You have updated information";
			echo "<script>window.location='link.php'</script>";
		}
	
	}
	public function delete(){
		$query = $this->con->prepare("update link set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('link.php','_self')</script>";
		}
	}

}