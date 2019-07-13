<?php 
include_once '../includes/control_header.php';
include_once '../../../vendor/autoload.php';
use App\Front\Marksheet\Ten;

$gov = new Ten();

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
<style type="text/css">
	

	input[type="button"] {
	transition: all .3s;
    border: 1px solid #ddd;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
	font-size: 15px;
}

input[type="button"]:not(.active) {
	background-color:transparent;
}

.btn-active {
	/*background-color: #ff4d4d;*/
	color :#ff4d4d;
}

input[type="button"]:hover:not(.active) {
	background-color: #ddd;
}
</style>
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
         <div class="review-content-section" id="description"><!--  style="background-image: url('view/front/uploads/icon/logo.jpg');" >	 -->
           <div class="row">
				<div class="col-sm-2 col-xs-2">
					<P>PAGE NO- <span id="page"></span></P>
					<p>EIIN : 121549</p>
				</div>
				<div class="col-sm-7 col-xs-7">
				  <center>
					<h4>BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, DHAKA</h4>
					<h4>Bangladesh</h4>
					<h3>Secondary School Certificate Examination - <?php echo $_SESSION['year'] ?></h3>
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
						<td><small>Group</small></td><td><small> : <i><b><?php echo $_SESSION['department'] ?></b></i></small></td><td><small>District</small></td><td><small> : <i><b>Bogra</b></i></small></td>
					</tr>
				   </table>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<table border="1" cellspacing="0" width="100%" id="myTable">
						<tr align="center">
							<td>Merit</td>
							<td width="20%">Student Info</td>
							<td>Bangla</td>
							<td>English</td>
							<td>Mathematics</td>
							<td width="4%">ICT</td>
							<td>Bangladesh</td>
							<td>Religion</td>
							<td colspan="3">Selecting Subject</td>
							<td>Additional Subject</td>
							<td>GPA(without 4th Subject)</td>
							<td width="4%">GPA</td>
						</tr>
						<?php
							$i = 1; 
							foreach($value as $data){
						?>
						<tr>
							<td align="center"><?php echo $i++ ?></td>
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
								DEPARTMENT - <?php echo $students['department'] ?><br>
								Studnet ID - <?php echo $students['student_id'] ?>
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
					 <p style="border-bottom: 1px solid;background: #FAEBD7;height: 45px;">
					 	<?php 
					 		echo $data['religion']; 
						?>
					 </p>
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
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 45px;">
						<?php 
					 		echo $data['physics']; 
						?>
						</p>
						<p style="margin-top:25px;">
					<?php
						if($data['pg'] == 5){
							echo "A+";
						} 
						else if($data['pg'] == 4){
							echo "A";
						}
						else if($data['pg'] == 3.5){
							echo "A-";
						}
						else if($data['pg'] == 3){
							echo "B";
						}
						else if($data['pg'] == 2){
							echo "C";
						}
						else if($data['pg'] == 1){
							echo "D";
						}
						else if($data['pg'] == 0){
							echo "F";
						}
					?>
						</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 45px;">
						<?php 
					 		echo $data['chemistry']; 
						?>
						</p>
						<p style="margin-top:25px;">
						<?php
						if($data['cg'] == 5){
							echo "A+";
						} 
						else if($data['cg'] == 4){
							echo "A";
						}
						else if($data['cg'] == 3.5){
							echo "A-";
						}
						else if($data['cg'] == 3){
							echo "B";
						}
						else if($data['cg'] == 2){
							echo "C";
						}
						else if($data['cg'] == 1){
							echo "D";
						}
						else if($data['cg'] == 0){
							echo "F";
						}
					?>			
						</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 45px;">
						<?php 
					 		echo $data['biology']; 
						?>
						</p>
						<p style="margin-top:25px;">
					<?php
						if($data['bg'] == 5){
							echo "A+";
						} 
						else if($data['bg'] == 4){
							echo "A";
						}
						else if($data['bg'] == 3.5){
							echo "A-";
						}
						else if($data['bg'] == 3){
							echo "B";
						}
						else if($data['bg'] == 2){
							echo "C";
						}
						else if($data['bg'] == 1){
							echo "D";
						}
						else if($data['bg'] == 0){
							echo "F";
						}
					?>	
						</p>
					</div>
				</td>
				<td align="center">
					<div style="padding-bottom:56px;">
						<p style="border-bottom: 1px solid;background: #FAEBD7;height: 45px;">
						<?php 
							if($data['agw'] !=0 or $data['agm'] !=0 or $data['agp'] !=0)
					 			echo $data['agriculture'];
					 		else if($data['hmw'] !=0 or $data['hmm'] !=0 or $data['hmp'] !=0) 
					 			echo $data['hmath'];
					 		else
					 			echo "Absent";
						?>
						</p>
						<p style="margin-top:25px;">
							<?php
						if($data['agg2'] == 5 or $data['hmg2'] == 5){
							echo "A+";
						} 
						else if($data['agg2'] == 4 or $data['hmg2'] == 4){
							echo "A";
						}
						else if($data['agg2'] == 3.5 or $data['hmg2'] == 3.5){
							echo "A-";
						}
						else if($data['agg2'] == 3 or $data['hmg2'] == 3){
							echo "B";
						}
						else if($data['agg2'] == 2 or $data['hmg2'] == 2){
							echo "C";
						}
						else if($data['agg2'] == 1 or $data['hmg2'] == 1){
							echo "D";
						}
						else if($data['agg2'] == 0 or $data['hmg2'] == 0){
							echo "F";
						}
					?>
						</p>
					</div>
				</td>
				<td align="center">
					<?php 
						if($bangla < 1 or $english < 1 or $data['mg'] == 0 or $data['pg'] == 0 or $data['cg'] == 0 or $data['bg'] == 0 or $data['big'] == 0 or $data['rg'] == 0 or $data['ig'] == 0){
							echo "F";
						}
						else{
						echo $data['was_totalgpa'];
						} 
					?>
				</td>
				<td align="center">
					<?php 
						if($bangla < 1 or $english < 1 or $data['mg'] == 0 or $data['pg'] == 0 or $data['cg'] == 0 or $data['bg'] == 0 or $data['big'] == 0 or $data['rg'] == 0 or $data['ig'] == 0){
							echo "F";
						}
						else{
						echo $data['gpa'];
						} 
					?>
				</td>
			</tr>
		<?php } ?>
		</table>
	   </div>
   	  </div>
<!-- 	  <div class="row">
			<div class="col-sm-12 col-xs-12">
			<br>	<small style="float:left;">Date of Publication of Result : 25 July</small>
				<small style="float:right;">Controller of Examination</small>
			</div>
		  </div> -->
           </div>
           <br><br>
       
         </div>


<script type="text/javascript">

var $table = document.getElementById("myTable"),
$n = 3,
$rowCount = $table.rows.length,
// get the first cell's tag name (in the first row)
$firstRow = $table.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHead = ($firstRow === "TD"),
// an array to hold each row
$tr = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$i,$ii,$j = ($hasHead)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$th = ($hasHead?$table.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCount = Math.ceil($rowCount / $n);
// if we had one page only, then we have nothing to do ..
if ($pageCount > 1) {
	// assign each row outHTML (tag name & innerHTML) to the array
	for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
		$tr[$ii] = $table.rows[$i].outerHTML;
	// create a div block to hold the buttons
	$table.insertAdjacentHTML("afterend","<br><div id='buttons'></div>");
	// the first sort, default page is the first one
	sort(1);
}

// ($p) is the selected page number. it will be generated when a user clicks a button
function sort($p) {
	/* create ($rows) a variable to hold the group of rows
	** to be displayed on the selected page,
	** ($s) the start point .. the first row in each page, Do The Math
	*/
	var $rows = $th,$s = (($n * $p)-$n);
	for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
		$rows += $tr[$i];
	
	// now the table has a processed group of rows ..
	$table.innerHTML = $rows;
	// create the pagination buttons
	document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
	document.getElementById("page").innerHTML = $p;
	// CSS Stuff
	document.getElementById("id"+$p).setAttribute("class","btn-active");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtons($pCount,$cur) {
	/* this variables will disable the "Prev" button on 1st page
	   and "next" button on the last one */
	var	$prevDis = ($cur == 1)?"disabled":"",
		$nextDis = ($cur == $pCount)?"disabled":"",
		/* this ($buttons) will hold every single button needed
		** it will creates each button and sets the onclick attribute
		** to the "sort" function with a special ($p) number..
		*/
	$buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
	if($cur >= $pCount){
		$j = $cur - 14;
		for ($i=$j; $i<=($cur);$i++){
			$buttons += " <input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
		}
	}
	else if($cur > 15){
		$j = $cur - 14;
		for ($i=$j; $i<=($cur+2);$i++){
			$buttons += " <input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
		}
	}
	else{
		for ($i=1; $i<=15;$i++){
			$buttons += " <input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
		}
	}
	$buttons += " ... <input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
	$buttons += " <input type='button' value='Last' onclick='sort("+$pCount+")' "+$nextDis+">";
	return $buttons;
}

</script>
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