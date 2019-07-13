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
            <form action="view/front/volunteer/store_volunteer.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Add New Volunteer</h3>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Volunteer Name : <font color="red" size="4">*</font> </label>
                            <input type="text" name="volunteer_name" class="form-control" placeholder="Enter new name" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class Name : <font color="red" size="4">*</font> </label>
                            <select name="class_name" class="form-control" required>
                              <option value="">--Select Class--</option>
                              <?php
                                for($i = 1; $i <= 12; $i++){
                              ?>
                              <option value="<?php echo $i ?>"><?php echo $i ?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Section :<font color="red" size="4">*</font> </label>
                           <select name="section" class="form-control" required>
                              <option value="">--Section--</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class Roll :<font color="red" size="4">*</font> </label>
                           <input type="text" name="class_roll" class="form-control" placeholder="Enter Class Roll" id="" required>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br>
                            <img id="blah" src="#" alt=" " />
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

