<?php 

include_once '../../../vendor/autoload.php';
use App\Front\Exam_routine\Exam_routine;

$gov = new Exam_routine();

$data = $gov->set($_GET);
$gov->delete($data);
?>