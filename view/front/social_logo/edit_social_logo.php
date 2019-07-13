<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Logo\logo;

$gov = new Logo();

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
            <form action="view/front/social_logo/update_social_logo.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Social Logo</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Facebook:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="facebook" class="form-control" value="<?php echo $data['facebook'] ?>" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Twitter:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="twitter" class="form-control" value="<?php echo $data['twitter'] ?>" />
                        </div>
                    </div> 
                </div> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Google Plus:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="google_plus" class="form-control" value="<?php echo $data['google_plus'] ?>" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Youtube:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="youtube" class="form-control" value="<?php echo $data['youtube'] ?>" />
                        </div>
                    </div> 
                </div> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pinterest:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="pinterest" class="form-control" value="<?php echo $data['pinterest'] ?>" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Vimeo:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="vimeo" class="form-control" value="<?php echo $data['vimeo'] ?>" />
                        </div>
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="mail" class="form-control" value="<?php echo $data['mail'] ?>" />
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

