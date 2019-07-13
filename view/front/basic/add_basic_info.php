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
            <form action="view/front/basic/store_basic_info.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Add Basic Information </h3>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label for="">Name of Institution<font color="red" size="4">*</font> </label>
                            <input type="text" name="school_name" class="form-control" placeholder="Enter name of Institution" id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Founder<font color="red" size="4">*</font> </label>
                           <input type="text" name="founder" class="form-control" placeholder="Enter Founder.." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Thana<font color="red" size="4">*</font> </label>
                           <input type="text" name="thana" class="form-control" placeholder="Enter Thana" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">District<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="district" placeholder="Enter District.." required>
                        </div>
                    
                    </div>
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Year Of Establishment<font color="red" size="4">*</font> </label>
                            <select name="year" class="form-control">
                            	<?php
                            		 for($year = 1900; $year <= date('Y'); $year++){
                                 ?>
                            			<option><?php echo $year ?></option>

                           	    <?php }?>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Background Image :<font color="red" size="4"></font> </label>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br>
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> School Logo :<font color="red" size="4"></font> </label>
                            <input type='file' id="" name="school_logo"  onchange="readURL3(this);" /><br>
                            <img id="blah3" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Right Logo :<font color="red" size="4"></font> </label>
                            <input type='file' id="" name="right_logo"  onchange="readURL4(this);" /><br>
                            <img id="blah4" src="#" alt=" " />
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

