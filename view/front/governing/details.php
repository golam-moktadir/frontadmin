
<?php include_once '../includes/control_header.php'; 

include_once '../../../vendor/autoload.php';
use App\Front\Governing\Governing;

$gov = new Governing();

$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12"> 
            <div class="row">
               <h3 class="text-center" style="color: #2559ee">Details Information </h3>
                  <div align="center" class="">
                    <img src="view/front/uploads/governing/<?php echo $data['image']?>" width="100" height="100">
                    <p>
                      <?php echo $data['name'] ?><br>
                      <?php echo $data['designation'] ?>
                    </p>
                  </div>       
            </div>  
            <div class="row">
                  <div style="width:600px;margin-left: 200px;" class="co">
                    
                     <table  class="table" id="dataTable" >
                      <tr align="">
                        <td><b>Sex</b></td>
                        <td><?php echo $data['sex'] ?></td>
                        <td><b>House Number</b></td>
                        <td><?php echo $data['house'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Educational Qualification</b></td>
                        <td><?php echo $data['education'] ?></td>
                        <td><b>Holding Number</b></td>
                        <td><?php echo $data['holding'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Date of Joining</b></td>
                        <td><?php echo $data['joining_date'] ?></td>
                        <td><b>Road Number</b></td>
                        <td><?php echo $data['road'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Date of Expire</b></td>
                        <td><?php echo $data['expiry_date'] ?></td>
                        <td><b>Village</b></td>
                        <td><?php echo $data['village'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Date of Birth</b></td>
                        <td><?php echo $data['birthday'] ?></td>
                        <td><b>Post Office</b></td>
                        <td><?php echo $data['post_office'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Blood Group</b></td>
                        <td><?php echo $data['blood_group'] ?></td>
                        <td><b>Union Council</b></td>
                        <td><?php echo $data['union_council'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Religion</b></td>
                        <td><?php echo $data['religion'] ?></td>
                         <td><b>Thana</b></td>
                         <td><?php echo $data['thana'] ?></td>
                      </tr>
                      <tr align="">
                        <td><b>Post Code</b></td>
                        <td><?php echo $data['post_code'] ?></td>
                         <td><b>District</b></td>
                         <td><?php echo $data['district'] ?></td>
                      </tr>
                      <tr>
                        <td><b>National ID</b></td>
                        <td><?php echo $data['nid']?></td>
                        <td><b>Mobile Number</b></td>
                        <td><?php echo $data['mobile_number']?></td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td><?php echo $data['email'] ?></td>
                      </tr>
                    </table> 
                 
                  </div>
            </div> 
                             
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/control_footer.php' ?>

