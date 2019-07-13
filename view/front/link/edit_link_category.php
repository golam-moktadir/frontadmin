<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link_category;

$gov = new Link_category();
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
            <form action="view/front/link/update_link_category.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Link Category</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Title of Link Category :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="title" required class="form-control" value="<?php echo $data['title'] ?>"/>
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

