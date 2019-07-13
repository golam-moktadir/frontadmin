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
            <form action="view/front/institution/store_institution.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Add Institution Information </h3>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label for="">Name of Institution<font color="red" size="4">*</font> </label>
                            <input type="text" name="institution_name" class="form-control" placeholder="Enter name of Institution" id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Village<font color="red" size="4">*</font> </label>
                           <input type="text" name="village" class="form-control" placeholder="Enter Village.." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office<font color="red" size="4">*</font> </label>
                           <input type="text" name="post_office" class="form-control" placeholder="Enter Post Office" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Thana<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="thana" placeholder="Enter Thana.." required>
                        </div>
                    
                    </div>
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">District<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="district" placeholder="Enter District" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Founded In<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="founded" placeholder="Founded In" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Message :<font color="red" size="4">*</font> </label>
                            <textarea name="history" required placeholder="Write message here"></textarea>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br />
                            <img id="blah" src="#" alt=" " />
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
</div></div></div></div></div></div></div>
<?php  include '../includes/control_footer.php' ?>

