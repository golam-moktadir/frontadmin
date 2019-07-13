<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Speech\Tno;

$gov = new Tno();

$data = $gov->set($_GET);
$gov->delete();
?>