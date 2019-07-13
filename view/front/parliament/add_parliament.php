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

            <form action="view/front/parliament/store_parliament.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center" style="color: #2559ee">Add Info About Student Parliament</h3>
                <hr /> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Message :<font color="red" size="4">*</font> </label>
                            <textarea name="parliament" required placeholder="Write message here"></textarea>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Image :<font color="red" size="4"> *</font> </label>
                            <input type='file' id="image" name="image" required  onchange="readURL(this);" />
                            <br />
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

