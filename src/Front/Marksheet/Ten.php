<?php 
namespace App\Front\Marksheet;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Ten extends Connection{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
	}
	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('term', $data)){
			$this->term = $data['term'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		return $this;
	}
/*	public function number_of_results(){
		$query = $this->con->prepare("select * from nineten where class=:class and term=:term and year=:year and department=:department");
		$query->bindValue(':class',$this->class,PDO::PARAM_STR);
		$query->bindValue(':term',$this->term,PDO::PARAM_STR);
		$query->bindValue(':year',$this->year,PDO::PARAM_STR);
		$query->bindValue(':department',$this->department,PDO::PARAM_STR);
		$query->execute();
		$_SESSION['class']=$this->class;
		$_SESSION['term']=$this->term;
		$_SESSION['year']=$this->year;
		$_SESSION['department']=$this->department;
		return $query->rowCount();	
	}*/
	public function student(){
		$query = $this->con->prepare("select * from student_data where class=:class and year=:year and department=:department");
		$query->bindValue(':class',$this->class,PDO::PARAM_STR);
		$query->bindValue(':year',$this->year,PDO::PARAM_STR);
		$query->bindValue(':department',$this->department,PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function result(){
		$query = $this->con->prepare("select * from nineten where class=:class and term=:term and year=:year and department=:department order by totalmark desc");
		$query->bindValue(':class',$this->class,PDO::PARAM_STR);
		$query->bindValue(':term',$this->term,PDO::PARAM_STR);
		$query->bindValue(':year',$this->year,PDO::PARAM_STR);
		$query->bindValue(':department',$this->department,PDO::PARAM_STR);
		$query->execute();

		$_SESSION['class']=$this->class;
		$_SESSION['term']=$this->term;
		$_SESSION['year']=$this->year;
		$_SESSION['department']=$this->department;
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
}