<?php 
namespace App\Front\Former;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Former extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('principle_speech', $data)){
			$this->principle_speech = $data['principle_speech'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function view($table,$status){
		$query = $this->con->prepare("select * from $table where status=:status order by id desc");
		$query->bindValue(':status', $status, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function restore_principle($id){
		$query = $this->con->prepare("update principle_speech set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',1, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Restored a person";
			echo "<script>window.open('x_principle.php','_self')</script>";
		}
	}
	public function restore_member($id){
		$query = $this->con->prepare("update managing_committe set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status','active', PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Restored a person";
			echo "<script>window.open('x_member.php','_self')</script>";
		}
	}

}