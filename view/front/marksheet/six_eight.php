<?php 
include_once '../includes/control_header.php';
include_once '../../../vendor/autoload.php';
use App\Front\Marksheet\Marksheet;

$gov = new Marksheet();

if(isset($_POST['submit'])){

	$gov->set($_POST);	
}
else{
	$gov->set($_SESSION);
}
// $number_of_results = $gov->number_of_results();
// $number_of_pages = ceil($number_of_results/3);
$student = $gov->student();

// if(!isset($_GET['page'])){
// 	$page = 1;
// }
// else{
// 	$page = $_GET['page'];
// }
// $this_page_first_result = ($page-1)*3;
$value = $gov->result();
?>
<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
<div class="single-pro-review-area mt-t-30 mg-b-15">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
     <div id="myTabContent" class="tab-content custom-product-edit">
     	<button class="btn btn-primary" onclick="printContent('description')"><i class="fa fa-print"></i>Print</button>
      <div class="product-tab-list tab-pane fade active in" id="">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
         <div class="review-content-section" id="description">	
           <div class="row">
				<div class="col-sm-2 col-xs-2">
					<P>PAGE NO- 
							<?php 
								if(isset($_GET['page'])){
									 echo $_GET['page']; 
								}
								else{
									echo "1";
								}
							?>
					</P>
					<p>EIIN : 121549</p>
				</div>
				<div class="col-sm-7 col-xs-7">
				  <center>
					<h4>BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, DHAKA</h4>
					<h4>Bangladesh</h4>
					<h3>Secondary School Certificate Examination - <?php echo $_SESSION['year']?></h3>
					<h2>Tabulation Sheet</h2>
				 </center>
				</div>
				<div class="col-sm-3 col-xs-3">
					<div class="static-table-list">
					 <table border="1" cellspacing="0" width="100%" style="height: 160px;">
						<tr align="center">
							<td><small>Letter Grade</small></td>
							<td><small>Class Interval</small></td>
							<td><small>Grade Point</small></td>
						</tr>
						<tr align="center">
							<td><small>A+</small></td>
							<td><small>80-100</small></td>
							<td><small>5</small></td>
						</tr>
						<tr align="center">
							<td><small>A</small></td>
							<td><small>70-79</small></td>
							<td><small>4</small></td>
						</tr>
						<tr align="center">
							<td><small>A-</small></td>
							<td><small>60-69</small></td>
							<td><small>3.5</small></td>
						</tr>
						<tr align="center">
							<td><small>B</small></td>
							<td><small>50-59</small></td>
							<td><small>3</small></td>
						</tr>
						<tr align="center">
							<td><small>C</small></td>
							<td><small>40-49</small></td>
							<td><small>2</small></td>
						</tr>
						<tr align="center">
							<td><small>D</small></td>
							<td><small>33-39</small></td>
							<td><small>1</small></td>
						</tr>
						<tr align="center">
							<td><small>F</small></td>
							<td><small>00-32</small></td>
							<td><small>0</small></td>
						</tr>
					 </table>
				    </div>
			    </div>
		    </div>
			<div class="row">
				<div class="col-sm-6 col-xs-6">
				 <div class="static-table-list">
					<table width="100%">
					 <tr>
						<td><small>Code of Institution</small></td><td><small> : <i><b>6126</b></i> </small></td><td><small> Centre Code</small></td><td><small> : <i><b>586</b></i></small></td>
					 </tr>
					 <tr>
						<td><small>Name of Institution</small></td><td><small> : <i><b>Police Line High School</b></i></small></td><td><small> Name of Centre</small></td><td><small> : <i><b>SAHATA - D</b></i></small></td>
					</tr>
					<tr>
						<td><small>Group</small></td><td><small> : <i><b>Business Studies</b></i></small></td><td><small>District</small></td><td><small> : <i><b>Bogra</b></i></small></td>
					</tr>
				   </table>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<table border="1" cellspacing="0" width="100%">
						<tr align="center">
							<td>Information of student</td>
							<td>Bangla</td>
							<td>English</td>
							<td>Mathematics</td>
							<td>Agriculture</td>
							<td>ICT</td>
							<td>Bangladesh</td>
							<td>General Science</td>
							<td>Religion</td>
							<td>Total</td>
							<td>GPA</td>
						</tr>
						<?php
							$i = 1;
							foreach($value as $data){
						?>
						<tr>
							<td style="padding-left: 5px;">
							<?php
								foreach($student as $students){

									if($students['student_id']== $data['student_id']){
							?>
								<small>
								CLASS ROLL. - <?php echo $students['class_roll'] ?><br>
								<?php echo $students['student_name'] ?><br>
								C/O <?php echo $students['father_name'] ?><br>
								<?php echo $students['mother_name'] ?><br>
								CLASS - <?php echo $students['class'] ?><br>
								Section - <?php echo $students['branch'] ?>
								</small>

							<?php } } ?>
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
				</td>
				<td align="center">
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
				</td>
				<td align="center">
					<?php echo $data['totalmark'] ?>
				</td>
				<td align="center">
					<?php echo $data['gpa'] ?>
				</td>
			</tr>
		<?php } ?>
		</table>
	   </div>
   	  </div>
   	  <br>
	  <div class="row">
			<div class="col-sm-12 col-xs-12">
				<p style="float:left;">Date of Publication of Result : 25 July</p>
				<p style="float:right;">Controller of Examination</p>
				<br><br>
			</div>
		  </div>
           </div>
           <?php
		for($page=1;$page<=$number_of_pages;$page++){
	?>
		<a href="view/front/marksheet/six_eight.php?page=<?php echo $page ?>"><?php echo $page ?></a>
	<?php
		}
	?>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<?php  include '../includes/control_footer.php' ?>


<!-- <h2><center><button class="print" onclick="printPageArea('printableArea')">Print</button></center></h2>
 -->