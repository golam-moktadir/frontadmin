<?php include_once '../includes/control_header.php'; 

include_once '../../../vendor/autoload.php';
use App\Front\Speech\Tno;

$gov = new Tno();
$id = $gov->set($_GET);
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
            <form action="view/front/speech/update_tno_speech.php" method="post" enctype="multipart/form-data">
               
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit TNO Message </h3>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Name :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" class="form-control" required value="<?php echo $data['name'] ?>" />
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Message :<font color="red" size="4">*</font> </label>
                            <textarea name="speech"><?php echo $data['speech'] ?></textarea>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4">*</font> </label>
                             <img src="view/front/uploads/speech/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br>
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                </div> 
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

