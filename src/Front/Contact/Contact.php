<?php 
namespace App\Front\Contact;
use PDO;
use PDOException;
use App\Connection;

class Contact extends Connection{

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
		if(array_key_exists('email', $data)){
			$this->email = $data['email'];
		}
		if(array_key_exists('message', $data)){
			$this->message = $data['message'];
		}
		return $this;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into contact (name,email,message,unique_id,created_at) values(:name,:email,:message,:unique_id,:created_at)");
		
		$query->bindValue(':name', $this->name, PDO::PARAM_STR);
		$query->bindValue(':email', $this->email, PDO::PARAM_STR);
		$query->bindValue(':message', $this->message, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		
		if($query->execute()){
			echo "<script>window.open('contact.php?message=Message sent','_self')</script>";
		}
		// $to = $this->email;
		// $subject = "Formal Interview Requested";
		// $message = $this->message;
		// mail($to,$subject,$message)
		// if(){
		// //	$_SESSION['message'] = "You have sent a message";
		// 	echo "<script>window.location='contact.php'</script>";
		// }
					
	}
	public function view(){
		$query = $this->con->prepare("select * from contact where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from book where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from book where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/achievement/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/achievement/'.$data['image'])){
			unlink('../uploads/achievement/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		
		$query = $this->con->prepare("update book set name=:name,writer=:writer,updated_at=:updated_at where status=:status and unique_id=:id");
			
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':name', $this->name, PDO::PARAM_STR);
		$query->bindValue(':writer',$this->writer, PDO::PARAM_STR);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
		$query->execute();
			
		if($query){
			$_SESSION['message'] = "You have updated information";
			echo "<script>window.location='book.php'</script>";
		}
	
	}
	public function delete($id){
		$query = $this->con->prepare("update book set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('book.php','_self')</script>";
		}
	}

}