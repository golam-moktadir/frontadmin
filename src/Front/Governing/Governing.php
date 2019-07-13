<?php 
namespace App\Front\Governing;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Governing extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/governing/'.$image);
		return $image;
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('sex', $data)){
			$this->sex = $data['sex'];
		}
		if(array_key_exists('designation', $data)){
			$this->designation = $data['designation'];
		}
		if(array_key_exists('education', $data)){
			$this->education = $data['education'];
		}
		if(array_key_exists('joining_date', $data)){
			$this->joining_date = $data['joining_date'];
		}
		if(array_key_exists('expiry_date', $data)){
			$this->expiry_date = $data['expiry_date'];
		}
		if(array_key_exists('birthday', $data)){
			$this->birthday = $data['birthday'];
		}
		if(array_key_exists('blood_group', $data)){
			$this->blood_group = $data['blood_group'];
		}
		if(array_key_exists('religion', $data)){
			$this->religion = $data['religion'];
		}
		if(array_key_exists('email', $data)){
			$this->email = $data['email'];
		}
		if(array_key_exists('mobile_number', $data)){
			$this->mobile_number = $data['mobile_number'];
		}
		if(array_key_exists('nid', $data)){
			$this->nid = $data['nid'];
		}
		if(array_key_exists('house', $data)){
			$this->house = $data['house'];
		}
		if(array_key_exists('holding', $data)){
			$this->holding = $data['holding'];
		}
		if(array_key_exists('road', $data)){
			$this->road = $data['road'];
		}
		if(array_key_exists('village', $data)){
			$this->village = $data['village'];
		}
		if(array_key_exists('post_office', $data)){
			$this->post_office = $data['post_office'];
		}
		if(array_key_exists('union_council', $data)){
			$this->union_council = $data['union_council'];
		}
		if(array_key_exists('thana', $data)){
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('post_code', $data)){
			$this->post_code = $data['post_code'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function insert($post){
		
		$query = $this->con->prepare("insert into managing_committe (name,sex,designation,education,joining_date,expiry_date,birthday,blood_group,religion,email,mobile_number,nid,house,holding,road,village,post_office,union_council,thana,district,post_code,image,unique_id,created_at,status) values (:name,:sex,:designation,:education,:joining_date,:expiry_date,:birthday,:blood_group,:religion,:email,:mobile_number,:nid,:house,:holding,:road,:village,:post_office,:union_council,:thana,:district,:post_code,:image,:unique_id,:created_at,:status)");

		$query->bindValue(':name', $this->name, PDO::PARAM_STR);
		$query->bindValue(':sex', $this->sex, PDO::PARAM_STR);
		$query->bindValue(':designation', $this->designation, PDO::PARAM_STR);
		$query->bindValue(':education', $this->education, PDO::PARAM_STR);
		$query->bindValue(':joining_date', $this->joining_date, PDO::PARAM_STR);
		$query->bindValue(':expiry_date', $this->expiry_date, PDO::PARAM_STR);
		$query->bindValue(':birthday', $this->birthday, PDO::PARAM_STR);
		$query->bindValue(':blood_group', $this->blood_group, PDO::PARAM_STR);
		$query->bindValue(':religion', $this->religion, PDO::PARAM_STR);
		$query->bindValue(':email', $this->email, PDO::PARAM_STR);
		$query->bindValue(':mobile_number', $this->mobile_number, PDO::PARAM_STR);
		$query->bindValue(':nid', $this->nid, PDO::PARAM_STR);
		$query->bindValue(':house', $this->house, PDO::PARAM_STR);
		$query->bindValue(':holding', $this->holding, PDO::PARAM_STR);
		$query->bindValue(':road', $this->road, PDO::PARAM_STR);
		$query->bindValue(':village', $this->village, PDO::PARAM_STR);
		$query->bindValue(':post_office', $this->post_office, PDO::PARAM_STR);
		$query->bindValue(':union_council', $this->union_council, PDO::PARAM_STR);
		$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
		$query->bindValue(':district', $this->district, PDO::PARAM_STR);
		$query->bindValue(':post_code', $this->post_code, PDO::PARAM_STR);
		$query->bindValue(':image', $this->image, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status', 'active', PDO::PARAM_STR);

		if($query->execute()){
			$_SESSION['message'] = 'You Have Inserted information';
			echo "<script>window.open('managing_committe.php','_self')</script>";
		}
	}
	public function view(){
		$query = $this->con->prepare("select * from managing_committe where status=:status order by id desc");
		$query->bindValue(':status', 'active', PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
		
	}
	public function details($id){
		$query = $this->con->prepare("select * from managing_committe where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>'active'));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from managing_committe where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status','active', PDO::PARAM_STR);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/governing/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/governing/'.$data['image'])){
			unlink('../uploads/governing/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update($post){

		if(empty($this->image)){

			$query = $this->con->prepare("update managing_committe set name=:name,sex=:sex,designation=:designation,education=:education,joining_date=:joining_date,expiry_date=:expiry_date,birthday=:birthday,blood_group=:blood_group,religion=:religion,email=:email,mobile_number=:mobile_number,nid=:nid,house=:house,holding=:holding,road=:road,village=:village,post_office=:post_office,union_council=:union_council,thana=:thana,district=:district,post_code=:post_code,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':name',$this->name, PDO::PARAM_STR);
			$query->bindValue(':sex',$this->sex, PDO::PARAM_STR);
			$query->bindValue(':designation',$this->designation, PDO::PARAM_STR);
			$query->bindValue(':education',$this->education, PDO::PARAM_STR);
			$query->bindValue(':joining_date',$this->joining_date, PDO::PARAM_STR);
			$query->bindValue(':expiry_date',$this->expiry_date, PDO::PARAM_STR);
			$query->bindValue(':birthday',$this->birthday, PDO::PARAM_STR);
			$query->bindValue(':blood_group',$this->blood_group, PDO::PARAM_STR);
			$query->bindValue(':religion',$this->religion, PDO::PARAM_STR);
			$query->bindValue(':email',$this->email, PDO::PARAM_STR);
			$query->bindValue(':mobile_number',$this->mobile_number, PDO::PARAM_STR);
			$query->bindValue(':nid',$this->nid, PDO::PARAM_STR);
			$query->bindValue(':house',$this->house, PDO::PARAM_STR);
			$query->bindValue(':holding',$this->holding, PDO::PARAM_STR);
			$query->bindValue(':road',$this->road, PDO::PARAM_STR);
			$query->bindValue(':village',$this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office',$this->post_office, PDO::PARAM_STR);
			$query->bindValue(':union_council',$this->union_council, PDO::PARAM_STR);
			$query->bindValue(':thana',$this->thana, PDO::PARAM_STR);
			$query->bindValue(':district',$this->district, PDO::PARAM_STR);
			$query->bindValue(':post_code',$this->post_code, PDO::PARAM_STR);
			$query->bindValue(':status','active', PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);

			if($query->execute()){
				$_SESSION['message'] = 'You Have updated information';
				echo "<script>window.open('index.php','_self')</script>";
			}
		}
		else{
			$query = $this->con->prepare("update managing_committe set name=:name,sex=:sex,designation=:designation,education=:education,joining_date=:joining_date,expiry_date=:expiry_date,birthday=:birthday,blood_group=:blood_group,religion=:religion,email=:email,mobile_number=:mobile_number,nid=:nid,house=:house,holding=:holding,road=:road,village=:village,post_office=:post_office,union_council=:union_council,thana=:thana,district=:district,post_code=:post_code,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':name',$this->name, PDO::PARAM_STR);
			$query->bindValue(':sex',$this->sex, PDO::PARAM_STR);
			$query->bindValue(':designation',$this->designation, PDO::PARAM_STR);
			$query->bindValue(':education',$this->education, PDO::PARAM_STR);
			$query->bindValue(':joining_date',$this->joining_date, PDO::PARAM_STR);
			$query->bindValue(':expiry_date',$this->expiry_date, PDO::PARAM_STR);
			$query->bindValue(':birthday',$this->birthday, PDO::PARAM_STR);
			$query->bindValue(':blood_group',$this->blood_group, PDO::PARAM_STR);
			$query->bindValue(':religion',$this->religion, PDO::PARAM_STR);
			$query->bindValue(':email',$this->email, PDO::PARAM_STR);
			$query->bindValue(':mobile_number',$this->mobile_number, PDO::PARAM_STR);
			$query->bindValue(':nid',$this->nid, PDO::PARAM_STR);
			$query->bindValue(':house',$this->house, PDO::PARAM_STR);
			$query->bindValue(':holding',$this->holding, PDO::PARAM_STR);
			$query->bindValue(':road',$this->road, PDO::PARAM_STR);
			$query->bindValue(':village',$this->village, PDO::PARAM_STR);
			$query->bindValue(':post_office',$this->post_office, PDO::PARAM_STR);
			$query->bindValue(':union_council',$this->union_council, PDO::PARAM_STR);
			$query->bindValue(':thana',$this->thana, PDO::PARAM_STR);
			$query->bindValue(':district',$this->district, PDO::PARAM_STR);
			$query->bindValue(':post_code',$this->post_code, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status','active', PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			
			if($query->execute()){
				$_SESSION['message'] = 'You Have updated information';
				echo "<script>window.open('index.php','_self')</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update managing_committe set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status','inactive', PDO::PARAM_STR);
		
		if($query->execute()){
				$_SESSION['message'] = 'You Have deleted information';
				echo "<script>window.open('index.php','_self')</script>";
		}
	}
}