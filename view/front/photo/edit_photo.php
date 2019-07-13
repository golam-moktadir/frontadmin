<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Photo\Photo;

$gov = new Photo();
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
            <form action="view/front/photo/update_photo.php" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Photo Gallery</h3>
                <hr />
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Caption :<font color="red" size="4"></font> </label>
                            <input type="text" name="caption" class="form-control" value="<?php echo $data['caption'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4">*</font> </label>
                            <img src="view/front/uploads/photo/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br />
                            
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

