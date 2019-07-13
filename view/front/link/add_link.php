<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Link\Link_category;

$gov = new Link_category;
$value = $gov->view();
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
            <?php          
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_SESSION['message'])){
                echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                session_unset();
            }
            ?>
            <form action="view/front/link/store_link.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center" style="color: #2559ee">Add New Link</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Title of Link  :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="title" required class="form-control" placeholder="Enter Title of Link" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Web Address :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="web_address" required class="form-control" placeholder="Enter Web Address" />
                        </div>
                    </div> 
                </div> 
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Category :</label><font color="red" size="4">*</font>
                    <select class="form-control" name="category_id" required>
                      <option value="">--Select--</option>
                      <?php
                        foreach($value as $data){
                      ?>
                       <option value="<?php echo $data['id'] ?>"><?php echo $data['title']?></option>
                     <?php } ?>
                    </select>
                  </div>
                  </div>
                </div>
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
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

