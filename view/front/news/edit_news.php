<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\News\News;

$gov = new News();
$id = $gov->set($_GET);
$data = $gov->details($id);
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
            <form action="view/front/news/update_news.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Notice</h3>
                <hr /> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Notice :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="news" class="form-control" value="<?php echo $data['news'] ?>" required />
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">File :<font color="red" size="4"> *</font> </label>
                            <embed src="view/front/uploads/news/<?php echo $data['image']?>" width="800px" height="800px" />
                            <input type='file' id="image" name="image" onchange="readURL(this);" />
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
    </div></div></div></div></div>
</div></div>
  </div>
</div>
<?php  include '../includes/control_footer.php' ?>

