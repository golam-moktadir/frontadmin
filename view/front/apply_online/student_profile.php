<?php 
include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Apply\Apply;

$gov = new Apply();
$id = $gov->set($_GET);
$data = $gov->student_profile();
?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <div class="profile-info-inner">
        <div class="profile-details-hr" id="profile">
            <div class="row">
                <div class="col-xs-1">
                    <img src="view/front/uploads/icon/pdf.jpg" width="80" height="80">
                </div>
                <div class="col-xs-11">
                    <h2>Palashbari S.M Model Pilot Govt. High School</h2>
                    <b>Palashbari, Gaibandha. School Code: 6250, EIIN No:121358. Contact No: 01753369854</b>
                </div>
            </div>
            <hr>
            <div class="row">
                <h3 class="text-center"><u>Admission - 2019</u></h3>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <h4>Application Registration Number : <?php echo $data['unique_id'] ?></h4>
                    <table class="table">
                        <tr>
                            <td><b>Student Name</b><td>
                            <td><?php echo $data['name'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Father's Name</b><td>
                            <td><?php echo $data['father'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Mother's Name</b><td>
                            <td><?php echo $data['mother'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Mobile Number</b><td>
                            <td><?php echo $data['mobile_no'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Date of Birth</b><td>
                            <td><?php echo $data['birthday'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Religion</b><td>
                            <td><?php echo $data['religion'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Address</b><td>
                            <td><?php echo $data['address'] ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
                    <p><b>Application Date: </b><?php echo substr($data['created_at'],0,10) ?></p>      
                    <img src='view/front/uploads/apply/<?php echo $data["image"] ?>' width='150' height='150' style='border-radius:10px;'/>
                    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h3><i>Congratulations!!Application Submitted Successfully</i></h3>
                    <p>
                       ***Save your Application Serial No.<br>
                       ***Print this page and save your Registration Number.<br>
                       ***Registration Number will be need to search your result in future. 
                    </p>
                </div>
            </div> 
            <hr>
            <h3>Account No: BKash-016122223605</h3>
            <div class="row">
                <div class="col-md-12">
                    <h4><u>Payment Instruction</u></h4>
                    <p><i>
                        01. Go to your bKash Mobile Menu by dialing *247#.<br>
                        02. Choose "Payment" option<br>
                        03. Enter the Mechant bkash Account Number you want to pay<br>
                        04.Enter the amount you want to pay<br>
                        05.Enter the reference* against your payment(you can mention the reference in one word or digit like as Bill/1)<br>
                        06.Enter the Counter number*(The Merchant bKash Account Owner will tell you the number)<br>
                        07.Now Enter your bKash Mobile Menu PIN to confirm<br>
                        Done you will receive a confirmation message with transection Id from bKash.Like as TrxID:4JS100LSYJ<br>
                        This Merchant number and this TrxID will be needed for next Process</i>
                    </p>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right ft-pn">
                <div class="btn-group active-hook">
                    <button class="btn btn-primary" onclick="printContent('profile')"><i class="fa fa-print"></i>Print</button>
                </div>
        </div>
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
    </div>
    </div>
   </div>
  </div>
 </div>
<?php  include '../includes/control_footer.php' ?>