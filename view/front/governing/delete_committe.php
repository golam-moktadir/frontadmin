<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Governing\Governing;

$gov = new Governing();

$data = $gov->set($_GET);
$gov->delete($data);

?>