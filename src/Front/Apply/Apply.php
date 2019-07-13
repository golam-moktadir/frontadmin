<?php 
namespace App\Front\Apply;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Apply extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('gender', $data)){
			$this->gender = $data['gender'];
		}
		if(array_key_exists('religion', $data)){
			$this->religion = $data['religion'];
		}
		if(array_key_exists('birthday', $data)){
			$this->birthday = $data['birthday'];
		}
		if(array_key_exists('father', $data)){
			$this->father = $data['father'];
		}
		if(array_key_exists('fa_duty', $data)){
			$this->fa_duty = $data['fa_duty'];
		}
		if(array_key_exists('mother', $data)){
			$this->mother = $data['mother'];
		}
		if(array_key_exists('ma_duty', $data)){
			$this->ma_duty = $data['ma_duty'];
		}
		if(array_key_exists('address', $data)){
			$this->address = $data['address'];
		}
		if(array_key_exists('mobile_no', $data)){
			$this->mobile_no = $data['mobile_no'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/apply/'.$image);
		return $image;
	}
	public function insert(){
		$query = $this->con->prepare("select * from apply where name=:name && mobile_no=:mobile_no");
		$query->bindValue(':name', $this->name, PDO::PARAM_STR);
		$query->bindValue(':mobile_no', $this->mobile_no, PDO::PARAM_STR);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		
		if(!empty($data['name'])){		
			$_SESSION['unique_id'] = $data['unique_id'];
			echo "<script>window.open('application_form.php','_self')</script>";
		}
		else{
			if(empty($this->image)){
				$query = $this->con->prepare("insert into apply (name,gender,religion,birthday,father,fa_duty,mother,ma_duty,address,mobile_no,unique_id,created_at) values(:name,:gender,:religion,:birthday,:father,:fa_duty,:mother,:ma_duty,:address,:mobile_no,:unique_id,:created_at)");
				
				$query->bindValue(':name', $this->name, PDO::PARAM_STR);
				$query->bindValue(':gender', $this->gender, PDO::PARAM_STR);
				$query->bindValue(':religion', $this->religion, PDO::PARAM_STR);
				$query->bindValue(':birthday', $this->birthday, PDO::PARAM_STR);
				$query->bindValue(':father', $this->father, PDO::PARAM_STR);
				$query->bindValue(':fa_duty', $this->fa_duty, PDO::PARAM_STR);
				$query->bindValue(':mother', $this->mother, PDO::PARAM_STR);
				$query->bindValue(':ma_duty', $this->ma_duty, PDO::PARAM_STR);
				$query->bindValue(':address', $this->address, PDO::PARAM_STR);
				$query->bindValue(':mobile_no', $this->mobile_no, PDO::PARAM_STR);
				$query->bindValue(':unique_id',$this->unique_id, PDO::PARAM_STR);
				$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
					
				if($query->execute()){
					$unique_id=$this->unique_id;
					echo "<script>window.open('student_profile.php?unique_id=$unique_id','_self')</script>";
				}
			}
			else{
				$query = $this->con->prepare("insert into apply (name,gender,religion,birthday,father,fa_duty,mother,ma_duty,address,mobile_no,image,unique_id,created_at) values(:name,:gender,:religion,:birthday,:father,:fa_duty,:mother,:ma_duty,:address,:mobile_no,:image,:unique_id,:created_at)");
				
				$query->bindValue(':name', $this->name, PDO::PARAM_STR);
				$query->bindValue(':gender', $this->gender, PDO::PARAM_STR);
				$query->bindValue(':religion', $this->religion, PDO::PARAM_STR);
				$query->bindValue(':birthday', $this->birthday, PDO::PARAM_STR);
				$query->bindValue(':father', $this->father, PDO::PARAM_STR);
				$query->bindValue(':fa_duty', $this->fa_duty, PDO::PARAM_STR);
				$query->bindValue(':mother', $this->mother, PDO::PARAM_STR);
				$query->bindValue(':ma_duty', $this->ma_duty, PDO::PARAM_STR);
				$query->bindValue(':address', $this->address, PDO::PARAM_STR);
				$query->bindValue(':mobile_no', $this->mobile_no, PDO::PARAM_STR);
				$query->bindValue(':image', $this->image, PDO::PARAM_STR);
				$query->bindValue(':unique_id',$this->unique_id, PDO::PARAM_STR);
				$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
					
				if($query->execute()){
					$unique_id=$this->unique_id;
					echo "<script>window.open('student_profile.php?unique_id=$unique_id','_self')</script>";
				}
			}
		}			
	}
	public function student_profile(){
		$query = $this->con->prepare("select * from apply where status=:status and unique_id=:unique_id");
		$query->bindValue(':unique_id',$this->unique_id,PDO::PARAM_STR);
		$query->bindValue(':status',1,PDO::PARAM_STR);
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function latest_student(){
		$query = $this->con->prepare("select * from apply where status=:status order by id desc");
		$query->execute(array(':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function view(){
		$query = $this->con->prepare("select * from apply where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from apply where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from apply where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',2, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/apply/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/apply/'.$data['image'])){
			unlink('../uploads/apply/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){
			$query = $this->con->prepare("update apply set apply=:apply,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':apply', $this->apply, PDO::PARAM_STR);
			$query->bindValue(':updated_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status', 2, PDO::PARAM_STR);
			$query->execute();
			if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='admission_notice.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update apply set apply=:apply,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':apply', $this->apply, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status',2, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='admission_notice.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update apply set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('admission_notice.php','_self')</script>";
		}
	}

}