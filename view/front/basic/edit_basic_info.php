<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Basic\Basic;

$gov = new Basic();
$gov->set($_GET);
$data = $gov->details();
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
            <form action="view/front/basic/update_basic_info.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Add Basic Information </h3>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label for="">Name of Institution<font color="red" size="4">*</font> </label>
                            <input type="text" name="school_name" class="form-control" value="<?php echo $data['school_name'] ?>" id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Founder<font color="red" size="4">*</font> </label>
                           <input type="text" name="founder" class="form-control" value="<?php echo $data['founder'] ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Thana<font color="red" size="4">*</font> </label>
                           <input type="text" name="thana" class="form-control" value="<?php echo $data['thana'] ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">District<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="district" value="<?php echo $data['district'] ?>" required>
                        </div>
                    
                    </div>
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Year Of Establishment<font color="red" size="4">*</font> </label>
                            <select name="year" class="form-control">
                            	<?php
                            		 for($year = 1900; $year <= date('Y'); $year++){
                                 ?>
                            			<option value="<?php echo $year ?>" <?php if($data['year'] == $year) echo "selected" ?>><?php echo $year ?></option>

                           	    <?php }?>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <img src="view/front/uploads/basic/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"   onchange="readURL(this);" />
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> School Logo :<font color="red" size="4"></font> </label>
                            <img src="view/front/uploads/basic/<?php echo $data['school_logo'] ?>" width="100" height="100"/>
                            <input type='file' id="" name="school_logo"  onchange="readURL3(this);" /><br>
                            <img id="blah3" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Right Logo :<font color="red" size="4"></font> </label>
                            <img src="view/front/uploads/basic/<?php echo $data['right_logo'] ?>" width="100" height="100"/>
                            <input type='file' id="" name="right_logo"  onchange="readURL4(this);" /><br>
                            <img id="blah4" src="#" alt=" " />
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

