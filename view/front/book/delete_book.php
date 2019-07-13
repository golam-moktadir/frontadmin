<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Book\Book;

$gov = new Book();

$data = $gov->set($_GET);
$gov->delete();
?>