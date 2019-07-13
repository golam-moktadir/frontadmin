<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Apply\Apply;

$gov = new Apply();
$data = $gov->latest_student();
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
         <h3 class="text-center" style="color: #2559ee">Student Application Form</h3>
          <hr />  
          <?php
            if(isset($_SESSION['unique_id'])){
              echo "<p>You have Already registered.Your Religion No is :".$_SESSION['unique_id']."</p>";
              unset($_SESSION['unique_id']);
            }
            ?>
         <div class="review-content-section">
            <form id="multiphase" onsubmit="return false" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                            <?php
                              $unique_id = 1000+$data['id'];
                            ?>
                            <input type="hidden" name="unique_id" value="<?php echo $unique_id ?>">
                            <label for="">Student Name :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" id="name" >
                            <h4><i id="error_name" style="color:red"></i></h4>
                    </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Gender :<font color="red" size="4">*</font> </label>
                           <select name="gender" class="form-control" id="gender">
                             <option value="">--Select--</option>
                             <option value="Male">Male</option> 
                             <option value="Female">Female</option> 
                             <option value="Common">Common</option> 
                           </select>
                           <h4><i id="error_gender" style="color:red"></i></h4>
                        </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Religion :<font color="red" size="4">*</font> </label>
                             <select name="religion" class="form-control" id="religion" >
                               <option value="">--Select--</option>
                               <option value="Islam">Islam</option> 
                               <option value="Hindu">Hindu</option> 
                               <option value="Buddhist">Buddhist</option>
                               <option value="Christian">Christian</option>
                               <option value="Others">Others</option> 
                             </select>
                             <h4><i id="error_religion" style="color:red"></i></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group data-custon-pick" id="data_1">
                        <label for="">Date of Birth <font color="red" size="4">*</font> </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="birthday" id="birthday" >
                            <h4><i id="error_birthday" style="color:red"></i></h4>
                        </div>
                     </div>                                                         
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Father's Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="father" class="form-control" placeholder="Enter father name" id="father" >
                            <h4><i id="error_father" style="color:red"></i></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Father's Occupation<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="fa_duty" placeholder="Enter Father Occupation.." id="fa_duty" >
                            <h4><i id="error_fa_duty" style="color:red"></i></h4>
                        </div>
                    
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Mother's Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="mother" class="form-control" placeholder="Enter Mother name" id="mother" />
                            <h4><i id="error_mother" style="color:red"></i></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Mother's Occupation<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="ma_duty" placeholder="Enter Mother Occupation.." id="ma_duty" >
                            <h4><i id="error_ma_duty" style="color:red"></i></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Address:<font color="red" size="4">*</font> </label>
                            <textarea  name="address" id="address" placeholder="Write Address here"></textarea>
                            <h4><i id="error_address" style="color:red"></i></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Guardian Mobile No.<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number.." id="mobile_no" >
                            <h4><i id="error_mobile_no" style="color:red"></i></h4>
                        </div> 
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <input type='file' id="image" name="image" onchange="readURL2(this);" /><br>
                            <img class="blah" src="#" alt=" " />
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" onclick="preview()">Preview</button>
         </div>
        </div>
       </div>
      </div>
      <div class="" id="show_all_data" style="display:none;">
        <h3 class="text-center">Application Form Preview</h3>
        <hr>
       <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <table class="table">
            <tr>
                <td><b>Student Name</b><td>
                <td id="display_name"></td>
            </tr>
            <tr>
                <td><b>Gender</b><td>
                <td id="display_gender"></td>
            </tr>
            <tr>
                <td><b>Religion</b><td>
                <td id="display_religion"></td>
            </tr>
            <tr>
                <td><b>Date of Birth</b><td>
                <td id="display_birthday"></td>
            </tr>
            <tr>
                <td><b>Mobile Number</b><td>
                <td id="display_mobile_no"></td>
            </tr>
            <tr>
                <td><b>Father's Name</b><td>
                <td id="display_father""></td>
            </tr>
            <tr>
                <td><b>Father's Occupation</b><td>
                <td id="display_fa_duty""></td>
            </tr>
            <tr>
                <td><b>Mother's Name</b><td>
                <td id="display_mother"></td>
            </tr>
             <tr>
                <td><b>Mother's Occupation</b><td>
                <td id="display_ma_duty"></td>
            </tr>
            <tr>
                <td><b>Address</b><td>
                <td id="display_address"></td>
            </tr>
        </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img class="blah" src="#" alt=" " />
        </div>
       </div>
       <button class="btn btn-default" onclick="previous()">Previous</button>
       <button class="btn btn-primary" onclick="submitForm()">Submit</button>
       </form>
      </div>
      <script type="text/javascript"> 
     //   function _(x){
       //   return document.getElementById(x);
       // }
        function preview(){
         var name = document.getElementById('name').value;
          var gender = document.getElementById('gender').value;
          var religion = document.getElementById('religion').value;
          var birthday = document.getElementById('birthday').value;
          var father = document.getElementById('father').value;
         var fa_duty = document.getElementById('fa_duty').value;
         var mother = document.getElementById('mother').value;
         var ma_duty = document.getElementById('ma_duty').value;
         var address = document.getElementById('address').value;
         var mobile_no = document.getElementById('mobile_no').value;
          var phoneno = /^\d{11}$/;
          
          if(name == ""){
            document.getElementById("error_name").innerHTML = "Enter your name";
            return false;
          }
          if(gender == ""){
            document.getElementById("error_gender").innerHTML = "Enter your gender";
            return false;
          }
          if(religion == ""){
            document.getElementById("error_religion").innerHTML = "Enter your religion";
            return false;
          }
          if(birthday == ""){
            document.getElementById("error_birthday").innerHTML = "Enter your birthday";
            return false;
          }
          if(father == ""){
            document.getElementById("error_father").innerHTML = "Enter your father";
            return false;
          }
          if(fa_duty == ""){
            document.getElementById("error_fa_duty").innerHTML = "Enter your fa_duty";
            return false;
          }
          if(mother == ""){
            document.getElementById("error_mother").innerHTML = "Enter your mother";
            return false;
          }
          if(ma_duty == ""){
            document.getElementById("error_ma_duty").innerHTML = "Enter your ma_duty";
            return false;
          }
          if(address == ""){
            document.getElementById("error_address").innerHTML = "Enter your address";
            return false;
          }
          if(mobile_no == ""){
            document.getElementById("error_mobile_no").innerHTML = "Enter your mobile_no";
            return false;
          }
          if(!mobile_no.match(phoneno))
          {
            document.getElementById('error_mobile_no').innerHTML="Enter 11 Number Only";
              return false;
          }
          else{
          document.getElementById("description").style.display = "none";
         document.getElementById("show_all_data").style.display = "block";
         document.getElementById("display_name").innerHTML = name;
         document.getElementById("display_gender").innerHTML = gender;
         document.getElementById("display_religion").innerHTML = religion;
         document.getElementById("display_birthday").innerHTML = birthday;
         document.getElementById("display_father").innerHTML = father;
         document.getElementById("display_fa_duty").innerHTML = fa_duty;
         document.getElementById("display_mother").innerHTML = mother;
         document.getElementById("display_ma_duty").innerHTML = ma_duty;
         document.getElementById("display_address").innerHTML = address;
         document.getElementById("display_mobile_no").innerHTML = mobile_no;
        }  
          //_("description").style.display = "none";
          //    _("show_all_data").style.display = "block";
          //  _("display_name").innerHTML = name;
          // _("display_gender").innerHTML = gender;
          // _("display_religion").innerHTML = religion;
          // _("display_birthday").innerHTML = birthday;
          // _("display_father").innerHTML = father;
          // _("display_fa_duty").innerHTML = fa_duty;
          // _("display_mother").innerHTML = mother;
          // _("display_ma_duty").innerHTML = ma_duty;
          // _("display_address").innerHTML = address;
          // _("display_mobile").innerHTML = mobile_no;
        }
        function previous(){
          document.getElementById("description").style.display = "block";
          document.getElementById("show_all_data").style.display = "none";
        }
        function submitForm(){
         var r = confirm("Are You Sure?? \n Once you Submit \n then cannot edit information");

         if(r == true){
          document.getElementById("multiphase").method = "post";
          document.getElementById("multiphase").action = "view/front/apply_online/store_application_form.php";
          document.getElementById("multiphase").submit();
         }
        }
      </script>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<?php  include '../includes/control_footer.php' ?>

