<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link;
use App\Front\Link\Link_category;

$link_category = new Link_category;
$gov = new Link();

$gov->set($_GET);
$data = $gov->details();
$category_value = $link_category->view();
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
            <form action="view/front/link/update_link.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Web Address</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Title of Link  :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="title" required class="form-control" value="<?php echo $data['title'] ?>"/>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Web Address:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="web_address" required class="form-control" value="<?php echo $data['web_address'] ?>"/>
                        </div>
                    </div>  
                </div> 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Category :<font color="red" size="4">*</font></label>
                     <select class="form-control" name="category_id">
                       <?php 
                         foreach($category_value as $category_data){
                       ?>
                        <option value="<?php echo $category_data['id']?>" <?php if($category_data['id'] == $data['category_id']) echo "selected" ?>><?php echo $category_data['title'] ?></option>
                     <?php }?>
                      </select>
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

