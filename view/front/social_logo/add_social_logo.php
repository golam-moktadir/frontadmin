<?php include_once '../includes/control_header.php'; ?>
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
            <form action="view/front/social_logo/store_logo.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center" style="color: #2559ee">Add New Social Media Links</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Facebook:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="facebook" class="form-control" placeholder="Enter Facebook Link" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Twitter:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="twitter" class="form-control" placeholder="Enter Twitter Link" />
                        </div>
                    </div> 
                </div> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Google Plus:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="google_plus" class="form-control" placeholder="Enter Google Plus Link" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Youtube:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="youtube" class="form-control" placeholder="Enter Youtube Link" />
                        </div>
                    </div> 
                </div> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pinterest:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="pinterest" class="form-control" placeholder="Enter Pinterest Link" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Vimeo:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="vimeo" class="form-control" placeholder="Enter Vimeo Link" />
                        </div>
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail:<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="mail" class="form-control" placeholder="Enter Gmail Link" />
                        </div>
                    </div> 
                </div>
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

