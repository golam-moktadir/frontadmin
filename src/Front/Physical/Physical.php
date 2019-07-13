<?php 
namespace App\Front\Physical;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Physical extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('building', $data)){
			$this->building = $data['building'];
		}
		if(array_key_exists('class_room', $data)){
			$this->class_room = $data['class_room'];
		}
		if(array_key_exists('student', $data)){
			$this->student = $data['student'];
		}
		if(array_key_exists('multi_class', $data)){
			$this->multi_class = $data['multi_class'];
		}
		if(array_key_exists('computer_lab', $data)){
			$this->computer_lab = $data['computer_lab'];
		}
		if(array_key_exists('school_ground', $data)){
			$this->school_ground = $data['school_ground'];
		}
		if(array_key_exists('vehicle', $data)){
			$this->vehicle = $data['vehicle'];
		}
		return $this;
	}
	public function insert($data){
			
		$query = $this->con->prepare("insert into physical (building,class_room,student,multi_class,computer_lab,school_ground,vehicle,unique_id,created_at) values(:building,:class_room,:student,:multi_class,:computer_lab,:school_ground,:vehicle,:unique_id,:created_at)");
		$query->bindValue(':building', $this->building, PDO::PARAM_INT);
		$query->bindValue(':class_room', $this->class_room, PDO::PARAM_INT);
		$query->bindValue(':student', $this->student, PDO::PARAM_INT);
		$query->bindValue(':multi_class', $this->multi_class, PDO::PARAM_INT);
		$query->bindValue(':computer_lab', $this->computer_lab, PDO::PARAM_INT);
		$query->bindValue(':school_ground', $this->school_ground, PDO::PARAM_INT);
		$query->bindValue(':vehicle', $this->vehicle, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message']="You have inserted information";
			echo "<script>window.location='physical.php'</script>";
		}
				
	}
	public function view(){
		$query = $this->con->prepare("select * from physical where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from physical where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update(){

		
		$query = $this->con->prepare("update physical set building=:building,class_room=:class_room,student=:student,multi_class=:multi_class,computer_lab=:computer_lab,school_ground=:school_ground,vehicle=:vehicle,updated_at=:updated_at where status=:status and unique_id=:id");
		$query->bindValue(':id', $this->id, PDO::PARAM_INT);
		$query->bindValue(':building', $this->building, PDO::PARAM_INT);
		$query->bindValue(':class_room', $this->class_room, PDO::PARAM_INT);
		$query->bindValue(':student', $this->student, PDO::PARAM_INT);
		$query->bindValue(':multi_class', $this->multi_class, PDO::PARAM_INT);
		$query->bindValue(':computer_lab', $this->computer_lab, PDO::PARAM_INT);
		$query->bindValue(':school_ground', $this->school_ground, PDO::PARAM_INT);
		$query->bindValue(':vehicle', $this->vehicle, PDO::PARAM_STR);
		$query->bindValue(':status', 1, PDO::PARAM_INT);
		$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);

		if($query->execute()){
			$_SESSION['message'] = "You Have Updated Information";
			echo "<script>window.open('physical.php','_self')</script>";
		}
		
	}
	public function delete(){
		$query = $this->con->prepare("update physical set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		
		if($query->execute()){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('physical.php','_self')</script>";
		}
	}

}