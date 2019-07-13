<?php 
namespace App\Front\Fetch;

use PDO;
use PDOException;
use App\Connection;

class Fetch extends Connection{

	public function multi_fetch($table,$status){
		$query = $this->con->prepare("select * from $table where status=:status order by id desc");
		$query->bindValue(':status', $status, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function single_fetch($table,$status){
		$query = $this->con->prepare("select * from $table where status=:status order by id desc");
		$query->execute(array(':status'=>$status));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}