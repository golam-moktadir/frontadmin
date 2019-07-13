<?php 
namespace App\Front\Basic;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Basic extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('school_name', $data)){
			$this->school_name = $data['school_name'];
		}
		if(array_key_exists('founder', $data)){
			$this->founder = $data['founder'];
		}
		if(array_key_exists('thana', $data)){
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		if(array_key_exists('school_logo', $data)){
			$this->school_logo = $data['school_logo'];
		}
		if(array_key_exists('right_logo', $data)){
			$this->right_logo = $data['right_logo'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/basic/'.$image);
		return $image;
	}
	public function logo_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/basic/'.$image);
		return $image;
	}
	public function right_logo_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/basic/'.$image);
		return $image;
	}
	public function insert(){
			
		if(!empty($this->image) && !empty($this->school_logo) && !empty($this->right_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,image,school_logo,right_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:image,:school_logo,:right_logo,:unique_id,:created_at)");
		
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':school_logo', $this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':right_logo', $this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image) && !empty($this->school_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,image,school_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:image,:school_logo,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':school_logo', $this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image) && !empty($this->right_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,image,right_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:image,:right_logo,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':right_logo', $this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->school_logo) && !empty($this->right_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,school_logo,right_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:school_logo,:right_logo,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':school_logo', $this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':right_logo', $this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,image,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:image,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->school_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,school_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:school_logo,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':school_logo', $this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->right_logo)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,right_logo,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:right_logo,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':right_logo', $this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}		
		else{
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from basic_info where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details(){
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/basic/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/basic/'.$data['image'])){
			unlink('../uploads/basic/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update_logo($id,$file){
		
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/basic/'.$image;
		
		if(empty($data['school_logo'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/basic/'.$data['school_logo'])){
			unlink('../uploads/basic/'.$data['school_logo']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update_right_logo($id,$file){
		
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/basic/'.$image;
		
		if(empty($data['right_logo'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/basic/'.$data['right_logo'])){
			unlink('../uploads/basic/'.$data['right_logo']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}

	public function update(){

		if(!empty($this->image) && !empty($this->school_logo) && !empty($this->right_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,image=:image,school_logo=:school_logo,right_logo=:right_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':school_logo',$this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':right_logo',$this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image) && !empty($this->school_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,image=:image,school_logo=:school_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':school_logo',$this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image) && !empty($this->right_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,image=:image,right_logo=:right_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':right_logo',$this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->school_logo) && !empty($this->right_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,school_logo=:school_logo,right_logo=:right_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':school_logo',$this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':right_logo',$this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->image)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->school_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,school_logo=:school_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':school_logo',$this->school_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else if(!empty($this->right_logo)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,right_logo=:right_logo,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':right_logo',$this->right_logo, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
				
			if($query->execute()){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
	}
	public function delete(){
		$query = $this->con->prepare("update basic_info set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_STR);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('basic_info.php','_self')</script>";
		}
	}

}