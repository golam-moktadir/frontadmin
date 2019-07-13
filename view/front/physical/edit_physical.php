<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Physical\Physical;

$gov = new Physical();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
     <div id="myTabContent" class="tab-content custom-product-edit">
      <div class="product-tab-list tab-pane fade active in" id="description">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="review-content-section">
            <form action="view/front/physical/update_physical.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Physical Infrastructure</h3>
                <hr />
                <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                            <label for="">Number of Building :<font color="red" size="4">*</font> </label>
                            <input type="number" name="building" class="form-control" value="<?php echo $data['building'] ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Number of Class Room :<font color="red" size="4">*</font> </label>
                            <input type="number" name="class_room" class="form-control" value="<?php echo $data['class_room'] ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                           <label for="">Number of Students:<font color="red" size="4">*</font> </label>
                            <input type="number" name="student" class="form-control" value="<?php echo $data['student'] ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">            
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Number of Multimedia Class Room: <font color="red" size="4">*</font> </label>
                            <input type="number" class="form-control" name="multi_class" value="<?php echo $data['multi_class'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                           <label for="">Number of Computer Lab: <font color="red" size="4">*</font> </label>
                            <input type="number" class="form-control" name="computer_lab" value="<?php echo $data['computer_lab'] ?>" required>  
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                           <label for="">Number of School Ground: <font color="red" size="4">*</font> </label>
                            <input type="number" class="form-control" name="school_ground" value="<?php echo $data['school_ground'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Number of Vehicles <font color="red" size="4">*</font> </label>
                             <input type="number" value="<?php echo $data['vehicle'] ?>" class="form-control" name="vehicle" required>  
                        </div>
                    </div> 
                </div>
               
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                </div>
            </form>
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

