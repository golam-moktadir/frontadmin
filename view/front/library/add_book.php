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
            <form action="view/front/library/store_library.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center" style="color: #2559ee">Add New Book</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Name of Book  :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="name" required class="form-control" placeholder="Enter Name of Book" />
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Writer's Name :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="writer" required class="form-control" placeholder="Writer's Name" />
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
</div></div></div></div></div>
<?php  include '../includes/control_footer.php' ?>

