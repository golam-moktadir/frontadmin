<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Marksheet\Marksheet;

$gov = new Marksheet();
$gov->set($_GET);

$data = $gov->details();
$mark = $gov->mark();
?>
<html>
<head>
<style>
*{
	margin:0;
	padding:0;
}
.container{
	width:900px;
	background: #F0FFFF;
	margin:0 auto;
	border: 10px dotted red;
	padding:0 20px;
}
.first{
	margin-top:15px;
}
.second{
	margin-top:15px;
	width:100%;
}
.second_left{
	float:left;
	width: 300px;
}
.second_middle{
	float:left;
	width: 300px;
}
.second_right{
	float:right;
	width: 300px;
}
.third{
	clear:both;
}
.footer{
	margin-bottom:15px;
}
</style>
</head>
<body>
<div class="container">
	<div class="first">	
		<center>
			<h2>BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, DHAKA</h2>
			<h3>Bangladesh</h3>
			<h2>Secondary School Certificate Examination - 2010</h2>
		</center>
	</div>
	<div class="second">
		<div class="second_left">
			<b>Serial No. DBS  014423</b><br><br>
			<p>DBCS : 020863</p>
			
		</div>
		<div class="second_middle">
			<p align="center"><img src="logo.jpg" width="100" height="100"></p>
		<h1><u>Academic Transcript</u></h1>
		</div>
		<div class="second_right">
			<table border="1" cellspacing="0">
				<tr>
					<th>Letter Grade</th>
					<th>Class Interval</th>
					<th>Grade Point</th>
				</tr>
				<tr align="center">
					<td>A+</td>
					<td>80-100</td>
					<td>5</td>
				</tr>
				<tr align="center">
					<td>A</td>
					<td>70-79</td>
					<td>4</td>
				</tr>
				<tr align="center">
					<td>A-</td>
					<td>60-69</td>
					<td>3.5</td>
				</tr>
				<tr align="center">
					<td>B</td>
					<td>50-59</td>
					<td>3</td>
				</tr>
				<tr align="center">
					<td>C</td>
					<td>40-49</td>
					<td>2</td>
				</tr>
				<tr align="center">
					<td>D</td>
					<td>33-39</td>
					<td>1</td>
				</tr>
				<tr align="center">
					<td>F</td>
					<td>00-32</td>
					<td>0</td>
				</tr>
			</table>
		</div>

	</div>
	<div class="third">
		<table>
			<tr>
				<td>Name of Student </td><td>: <i><b><?php echo $data['student_name'] ?></b></i></td>
			</tr>
			<tr>
				<td>Father's Name  </td><td>: <i><b><?php echo $data['father_name'] ?></b></i></td>
			</tr>
			<tr>
				<td>Mother's Name  </td><td>: <i><b><?php echo $data['mother_name'] ?></b></i></td>
			</tr>
			<tr>
				<td>Name of Institution </td><td>: <i><b>Police Line High School, Rangpur</b></i></td>
			</tr>
			<tr>
				<td>Name of Centre </td><td>: <i><b>Rangpur-3</b></i></td>
			</tr>
			<tr>
				<td>Roll No.  </td><td>: <i><b><?php echo $data['class_roll'] ?></b></i></td><td> Registration  </td><td>: <i><b><?php echo $data['student_id'] ?></b></i></td>
			</tr>
			<tr>
				<td>Group  </td><td>: <i><b><?php echo $data['department'] ?></b></i></td><td>Tpye of Student </td><td>: <i><b>Regular</b></i></td>
			</tr>
		</table>
		<br>
		<table border="1" cellspacing="0">
			<tr align="center">
				<th>SL No.</th>
				<th>Name of Subject</th>
				<th>Letter Grade</th>
				<th>Grade Point</th>
				<th>Grade Point Average(GPA)</th>
			</tr>
			<tr align="center">
				<td>1</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
				<td rowspan="8" width="1%">5.00</td>
			</tr>
			<tr align="center">
				<td>2</td>
				<td>English</td>
				<td>A+</td>
				<td>5</td>
			</tr>
			<tr align="center">
				<td>3</td>
				<td>Mathematics</td>
				<td>A+</td>
				<td>5</td>
			</tr>
			<tr align="center">
				<td>4</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
			</tr>
			<tr align="center">
				<td>5</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
				
			</tr>
			<tr align="center">
				<td>6</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
			</tr>
			<tr align="center">
				<td>7</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
			</tr>
			<tr align="center">
				<td>8</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
			</tr>
		</table><br>
		<p>Additional Subject:</p><br>
		<table border="1" width="550" cellspacing="0">
			<tr>
				<th>SL No.</th>
				<th>Name of Subject</th>
				<th>Letter Grade</th>
				<th>Grade Point</th>
			</tr>
			<tr align="center">
				<td>9</td>
				<td>Bangla</td>
				<td>A+</td>
				<td>5</td>
			</tr>
		</table><br><br>
	</div>
	<div class="footer">
		<p style="float:left;">Date of Publication of Result : 25 July</p>
		<p style="float:right;">Controller of Examination</p>
		<br><br>
	</div>
</div>
</body>
</html>