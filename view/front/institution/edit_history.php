<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Institution\Institution;

$gov = new Institution();
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
            <form action="view/front/institution/update_institution.php" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">

                <h3 class="text-center" style="color: #2559ee">Edit Institution Information </h3>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label for="">Name of Institution<font color="red" size="4">*</font> </label>
                            <input type="text" name="institution_name" class="form-control" value="<?php echo $data['institution_name'] ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Village<font color="red" size="4">*</font> </label>
                           <input type="text" name="village" class="form-control" value="<?php echo $data['village']?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office<font color="red" size="4">*</font> </label>
                           <input type="text" name="post_office" class="form-control" value="<?php echo $data['post_office']?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Thana<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="thana" value="<?php echo $data['thana']?>">
                        </div>
                    
                    </div>
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">District<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="district" value="<?php echo $data['district'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Founded In<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="founded" value="<?php echo $data['founded'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Message :<font color="red" size="4">*</font> </label>
                            <textarea name="history"><?php echo $data['history'] ?></textarea>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4">*</font> </label>
                             <img src="view/front/uploads/institution/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br>
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                </div> 
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

