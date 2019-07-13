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
         <form action="view/front/governing/store_managing.php" method="post" enctype="multipart/form-data">
          <h3 class="text-center" style="color: #2559ee">Add Commitee Information </h3><hr/>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Member Name :<font color="red" size="4">*</font> </label>
                <input name="name" type="text" class="form-control" placeholder="Full Name">
            </div>                                                          
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Sex : <font color="red" size="4">*</font></label>
                <select class="form-control" name="sex" required>
                    <option value=""> - select - </option>
                    <option value="Male">Male</option>
                    <option value="Female"> Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>                                                          
           </div>
          </div>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="">Designation: <font color="red" size="4">*</font> </label>
                        <select class="form-control" name="designation" required>
                            <option value="">--Select--</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Member">Member</option>
                        </select>
                </div>                                                          
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                     <label for="">Educational Qualification: <font color="red" size="4">*</font> </label>
                     <input type="text" class="form-control" name="education" placeholder="Educational Qualification" required>
                </div>                                                          
            </div>
           </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group data-custon-pick" id="data_1">
                        <label for=""><b>Joining date: </b><font color="red" size="4">*</font> </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="joining_date" required>
                        </div>
                    </div>                                                          
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group data-custon-pick" id="data_1">
                        <label for="">Expiry Date <font color="red" size="4">*</font> </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="expiry_date" required>
                        </div>
                    </div>                                                           
                </div>
            </div>
            <h3 class="text-center" style="color: #2559ee">Personal Information </h3>
            <hr />
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group data-custon-pick" id="data_1">
                        <label for="">Date of Birth <font color="red" size="4">*</font> </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="birthday" required>
                        </div>
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Blood Group <font color="red" size="4">*</font> </label>
                            <select name="blood_group" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="A+">A+</option> 
                             <option value="A-">A-</option> 
                             <option value="B+">B+</option> 
                             <option value="B-">B-</option> 
                             <option value="O+">O+</option> 
                             <option value="O-">O-</option> 
                             <option value="AB+">AB+</option> 
                             <option value="AB-">AB-</option> 
                           </select>
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Religion <font color="red" size="4">*</font> </label>
                        <select name="religion" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="Islam">Islam</option> 
                             <option value="Hindu">Hindu</option> 
                             <option value="Buddhist">Buddhist</option> 
                             <option value="Cristian">Cristian</option> 
                         </select>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Email <font color="red" size="4">*</font> </label>
                         <input type="email" placeholder="Enter Email" class="form-control" name="email" required>  
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Mobile Number <font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="mobile_number" placeholder="Enter Mobile Number" required>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">National ID <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter National ID" class="form-control" name="nid" required>  
                    </div>                                                          
                </div>
            </div>
            <h3 class="text-center" style="color: #2559ee">Present Address </h3>
            <hr />
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="">House No.<font color="red" size="4">*</font> </label>
                         <input type="text" placeholder="Enter House Number" class="form-control" name="house" required>       
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="form-group">
                       <label for="">Holding No.<font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Holding" class="form-control" name="holding" required>  
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label for="">Road No.<font color="red" size="4">*</font> </label>
                         <input type="text" placeholder="Enter Road number" class="form-control" name="road" required>  
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="">Village <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Village" class="form-control" name="village" required>        
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Office<font color="red" size="4">*</font> </label>
                       <input type="text" placeholder="Enter Post Office" class="form-control" name="post_office" required>  
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Union Council<font color="red" size="4">*</font> </label>
                       <input type="text" placeholder="Enter Union Council" class="form-control" name="union_council" required>  
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="">Thana <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Thana" class="form-control" name="thana" required>         
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="form-group">
                       <label for="">District <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter District" class="form-control" name="district" required>   
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Code <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Post Code" class="form-control" name="post_code" required>   
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for=""> Image :<font color="red" size="4">*</font> </label>
                            <input type='file' id="image" required name="image"  onchange="readURL(this);" />
                           <br> <img id="blah" src="#" alt=" " />         
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
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

