<?php 
namespace App\Front\Logo;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Logo extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('facebook', $data)){
			$this->facebook = $data['facebook'];
		}
		if(array_key_exists('twitter', $data)){
			$this->twitter = $data['twitter'];
		}
		if(array_key_exists('google_plus', $data)){
			$this->google_plus = $data['google_plus'];
		}
		if(array_key_exists('youtube', $data)){
			$this->youtube = $data['youtube'];
		}
		if(array_key_exists('pinterest', $data)){
			$this->pinterest = $data['pinterest'];
		}
		if(array_key_exists('vimeo', $data)){
			$this->vimeo = $data['vimeo'];
		}
		if(array_key_exists('mail', $data)){
			$this->mail = $data['mail'];
		}

		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/social_logo/'.$image);
		return $image;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into social_logo (facebook,twitter,google_plus,youtube,pinterest,vimeo,mail,status,unique_id,created_at) values(:facebook,:twitter,:google_plus,:youtube,:pinterest,:vimeo,:mail,:status,:unique_id,:created_at)");
		
		$query->bindValue(':facebook', $this->facebook, PDO::PARAM_STR);
		$query->bindValue(':twitter', $this->twitter, PDO::PARAM_STR);
		$query->bindValue(':google_plus', $this->google_plus, PDO::PARAM_STR);
		$query->bindValue(':youtube', $this->youtube, PDO::PARAM_STR);
		$query->bindValue(':pinterest', $this->pinterest, PDO::PARAM_STR);
		$query->bindValue(':vimeo', $this->vimeo, PDO::PARAM_STR);
		$query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
	//	$query->execute();		
		if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='social_logo.php'</script>";
		}
				
	}
	public function view(){
		$query = $this->con->prepare("select * from social_logo where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from social_logo where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from social_logo where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/social_logo/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/social_logo/'.$data['image'])){
			unlink('../uploads/social_logo/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){
			$query = $this->con->prepare("update social_logo set facebook=:facebook,twitter=:twitter,google_plus=:google_plus,youtube=:youtube,pinterest=:pinterest,vimeo=:vimeo,mail=:mail,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id', $this->id, PDO::PARAM_STR);
			$query->bindValue(':facebook', $this->facebook, PDO::PARAM_STR);
			$query->bindValue(':twitter', $this->twitter, PDO::PARAM_STR);
			$query->bindValue(':google_plus', $this->google_plus, PDO::PARAM_STR);
			$query->bindValue(':youtube', $this->youtube, PDO::PARAM_STR);
			$query->bindValue(':pinterest', $this->pinterest, PDO::PARAM_STR);
			$query->bindValue(':vimeo', $this->vimeo, PDO::PARAM_STR);
			$query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
			$query->bindValue(':updated_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='social_logo.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update social_logo set title=:title,web_address=:web_address,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id', $this->id, PDO::PARAM_STR);
			$query->bindValue(':title', $this->title, PDO::PARAM_STR);
			$query->bindValue(':web_address', $this->web_address, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			
			if($query->execute()){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='social_logo.php'</script>";
			}
		}
	}
	public function delete(){
		$query = $this->con->prepare("update social_logo set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('social_logo.php','_self')</script>";
		}
	}

}