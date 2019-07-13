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
          <h3 class="text-center" style="color: #2559ee">৬ষ্ঠ থেকে ৮ম শ্রেণীর ফলাফল</h3>
          <hr /> 
        <form action="view/front/marksheet/six_eight.php" method="post">  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option value="">সিলেক্ট করুন</option>
                            <option value="৬ষ্ঠ">৬ষ্ঠ</option>
                            <option value="৭ম">৭ম</option>
                            <option value="৮ম">৮ম</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি</option>
                            <option>বার্ষিক</option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>শাখা</strong>
                        <select class="form-control" name="branch" required>
                            <option>সিলেক্ট করুন</option>
                            <option>ক</option>
                            <option>খ</option>
                            <option>গ</option>
                            <option>ঘ</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>শিক্ষাবর্ষ:</strong>
                        <select class="form-control" name="year" required>
                            <option>সিলেক্ট করুন</option>
                            <option>2017</option>
                            <option selected="">2018</option>
                            <option>2019</option>
                            <option>2020  </option>
                        </select>
                    </div>
                </div>
            </div>            
             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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