<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Marksheet\Marksheet;

$gov = new Marksheet();

$number_of_results = $gov->number_of_results();
$number_of_pages = ceil($number_of_results/3);

if(!isset($_GET['page'])){
	$page = 1;
}
else{
	$page = $_GET['page'];
}
$this_page_first_result = ($page-1)*3;
$value = $gov->result($this_page_first_result);
?>
<html>
<head>
<style>
*{
	margin:0;
	padding:0;
}
.container{
	width:1100px;
	background: #F0FFFF;
	margin:0 auto;
	border: 10px dotted red;
	padding:0 20px;
}
.footer{
	margin-top:30px;
}
.print{
	width: 100px;
	height: 30px;
	margin:5px;
}
</style>
<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
</head>
<body>
<h2><center><button class="print" onclick="printContent('container')">Print</button></center></h2>	
<table border="0" width="90%" id="container">
   <tr>
	<td>		
	  <P>PAGE NO- 
    	<?php 
			if(isset($_GET['page'])){
				 echo $_GET['page']; 
			}
			else{
				echo "1";
			}
		?>
		</P><br>
		<p>EIIN : 121549</p>	
	</td>
	<td>
	<center>
		<h3>BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, DHAKA</h3>
		<h3>Bangladesh</h3>
		<h2>Secondary School Certificate Examination - 2010</h2>
		<h1>Tabulation Sheet</h1>
	</center>
	</td>
	<td>	
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
	</td>
	</tr>
</table>
<?php die(); ?>
	<tr>
	 <td colspan="2">
		<table>
			<tr>
				<td>Code of Institution</td><td> : <i><b>6126</b></i> </td><td> Centre Code</td><td> : <i><b>586</b></i></td>
			</tr>
			<tr>
				<td>Name of Institution</td><td> : <i><b>Police Line High School</b></i></td><td> Name of Centre</td><td> : <i><b>SAHATA - D</b></i></td>
			</tr>
			<tr>
				<td>Group</td><td> : <i><b>Business Studies</b></i></td><td>District</td><td> : <i><b>Bogra</b></i></td>
			</tr>
		</table>
	</td>
   </tr>	
	<tr>
		<td colspan="3">
		<table border="1" cellspacing="0" width="100%">
			<tr align="center">
				<td width="20%">Information of student</td>
				<td>Bangla</td>
				<td>English</td>
				<td>Mathematics</td>
				<td>Agriculture</td>
				<td width="4%">ICT</td>
				<td>Bangladesh</td>
				<td>General/Social Science</td>
				<td>Religion</td>
				<td colspan="3">Selecting Subject</td>
				<td>Additional Subject</td>
				<td>GPA(without 4th Subject)</td>
				<td width="4%">GPA</td>
			</tr>
			<?php

				foreach($value as $data){
			?>
			<tr>
				<td style="padding-left: 5px;">
					<small>ROLL NO. - <?php echo $data['class_roll'] ?><br><br>
					<?php echo $data['student_name'] ?><br>
					C/O <?php echo $data['father_name'] ?><br>
					<?php echo $data['mother_name'] ?><br>
					REG. NO. - <?php echo $data['student_id'] ?><br>
					CAND. TYPE - IRREGULAR<br>
					DATE OF BIRTH - 10/04/01</small>
				</td>
				<td align="center">
					<?php
						$bangla = ($data['b1g'] + $data['b2g']) / 2;
						
						if($bangla == 5){
							echo "A+";
						} 
						else if($bangla >= 4 && $bangla < 5){
							echo "A";
						}
						else if($bangla >= 3.5 && $bangla < 4){
							echo "A-";
						}
						else if($bangla >= 3 && $bangla < 3.5){
							echo "B";
						}
						else if($bangla >= 2 && $bangla < 3){
							echo "C";
						}
						else if($bangla >= 1 && $bangla < 2){
							echo "D";
						}
						else if($bangla >= 0 && $bangla < 1){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<?php
						$english = ($data['e1g'] + $data['e2g']) / 2; 

						if($english == 5){
							echo "A+";
						} 
						else if($english >= 4 && $english < 5){
							echo "A";
						}
						else if($english >= 3.5 && $english < 4){
							echo "A-";
						}
						else if($english >= 3 && $english < 3.5){
							echo "B";
						}
						else if($english >= 2 && $english < 3){
							echo "C";
						}
						else if($english >= 1 && $english < 2){
							echo "D";
						}
						else if($english >= 0 && $english < 1){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<?php
						if($data['mg'] == 5){
							echo "A+";
						} 
						else if($data['mg'] == 4){
							echo "A";
						}
						else if($data['mg'] == 3.5){
							echo "A-";
						}
						else if($data['mg'] == 3){
							echo "B";
						}
						else if($data['mg'] == 2){
							echo "C";
						}
						else if($data['mg'] == 1){
							echo "D";
						}
						else if($data['mg'] == 0){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<?php
						if($data['agg'] == 5){
							echo "A+";
						} 
						else if($data['agg'] == 4){
							echo "A";
						}
						else if($data['agg'] == 3.5){
							echo "A-";
						}
						else if($data['agg'] == 3){
							echo "B";
						}
						else if($data['agg'] == 2){
							echo "C";
						}
						else if($data['agg'] == 1){
							echo "D";
						}
						else if($data['agg'] == 0){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<?php
						if($data['ig'] == 5){
							echo "A+";
						} 
						else if($data['ig'] == 4){
							echo "A";
						}
						else if($data['ig'] == 3.5){
							echo "A-";
						}
						else if($data['ig'] == 3){
							echo "B";
						}
						else if($data['ig'] == 2){
							echo "C";
						}
						else if($data['ig'] == 1){
							echo "D";
						}
						else if($data['ig'] == 0){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<?php
						if($data['big'] == 5){
							echo "A+";
						} 
						else if($data['big'] == 4){
							echo "A";
						}
						else if($data['big'] == 3.5){
							echo "A-";
						}
						else if($data['big'] == 3){
							echo "B";
						}
						else if($data['big'] == 2){
							echo "C";
						}
						else if($data['big'] == 1){
							echo "D";
						}
						else if($data['big'] == 0){
							echo "F";
						}
					?>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">Science</p>
						<p style="margin-top:25px;">
					<?php
						if($data['sg'] == 5){
							echo "A+";
						} 
						else if($data['sg'] == 4){
							echo "A";
						}
						else if($data['sg'] == 3.5){
							echo "A-";
						}
						else if($data['sg'] == 3){
							echo "B";
						}
						else if($data['sg'] == 2){
							echo "C";
						}
						else if($data['sg'] == 1){
							echo "D";
						}
						else if($data['sg'] == 0){
							echo "F";
						}
					?>		
						</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">Islam</p>
						<p style="margin-top:25px;">
							<?php
						if($data['rg'] == 5){
							echo "A+";
						} 
						else if($data['rg'] == 4){
							echo "A";
						}
						else if($data['rg'] == 3.5){
							echo "A-";
						}
						else if($data['rg'] == 3){
							echo "B";
						}
						else if($data['rg'] == 2){
							echo "C";
						}
						else if($data['rg'] == 1){
							echo "D";
						}
						else if($data['rg'] == 0){
							echo "F";
						}
					?>
								
						</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">Physics</p>
						<p style="margin-top:25px;">B</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">Chemistry</p>
						<p style="margin-top:25px;">B</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">Biology</p>
						<p style="margin-top:25px;">B</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 30px;">E. Math</p>
						<p style="margin-top:25px;">B</p>
					</div>
				</td>
				<td align="center">
					4.06
				</td>
				<td align="center">
					<?php echo $data['gpa'] ?>
				</td>
			</tr>
		<?php } ?>
		</table>
	   </td>
	</tr>
	<tr>
		<td colspan="3">
		<p style="float:left;">Date of Publication of Result : 25 July</p>
		<p style="float:right;">Controller of Examination</p>
		<br><br>
	   </td>
	</tr>
	<tr>
		<td colspan="3">
	<?php
		for($page=1;$page<=$number_of_pages;$page++){
	?>
		<a href="tabulation.php?page=<?php echo $page ?>"><?php echo $page ?></a>
	<?php
		}
	?>
		</td>
	</tr>
</table>
</body>
</html>