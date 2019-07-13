
<?php include_once '../includes/control_header.php'; 

include_once '../../../vendor/autoload.php';
use App\Front\Governing\Governing;

$gov = new Governing();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <form action="view/front/governing/update_committe.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>" class="form-control">
                <h3 class="text-center" style="color: #2559ee">Edit Commitee Information </h3>
                <hr />
                    <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_GET['message'])){
                echo "<div class='alert alert-success'>".$_GET['message']."</div>";
               // session_unset();
            }


            ?>
                <div class="row">

                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="">Member Name :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Sex : <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option value=""> - select - </option>
                                <option value="Male" <?php if($data['sex'] == 'Male') echo "selected" ?>>Male</option>
                                <option value="Female" <?php if($data['sex'] == 'Female') echo "selected" ?>> Female</option>
                                <option value="Others" <?php if($data['sex'] == 'Others') echo "selected" ?>>Others</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Designation: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="designation" required>
                                <option value="">--Select--</option>
                                <option value="President" <?php if($data['designation'] == 'President') echo "selected" ?>>President</option>
                                <option value="Vice President" <?php if($data['designation'] == 'Vice President') echo "selected" ?>>Vice President</option>
                                <option value="Secretary" <?php if($data['designation'] == 'Secretary') echo "selected" ?> >Secretary</option>
                                <option value="Member" <?php if($data['designation'] == 'Member') echo "selected" ?>>Member</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Educational Qualification: <font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="education" value="<?php echo $data['education']?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Joining date <font color="red" size="4">*</font> </label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" value="<?php echo $data['joining_date'] ?>" name="joining_date">
                                <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Expiry Date <font color="red" size="4">*</font> </label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" value="<?php echo $data['expiry_date'] ?>" name="expiry_date">
                                <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-center" style="color: #2559ee">Personal Information </h3>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date of Birth <font color="red" size="4">*</font> </label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" value="<?php echo $data['birthday'] ?>" name="birthday">
                                <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                                 </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Blood Group <font color="red" size="4">*</font> </label>
                            <select name="blood_group" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="A+" <?php if($data['blood_group'] == 'A+') echo "selected" ?>>A+</option> 
                             <option value="A-" <?php if($data['blood_group'] == 'A-') echo "selected" ?>>A-</option> 
                             <option value="B+" <?php if($data['blood_group'] == 'B+') echo "selected" ?>>B+</option> 
                             <option value="B-" <?php if($data['blood_group'] == 'B-') echo "selected" ?>>B-</option> 
                             <option value="O+" <?php if($data['blood_group'] == 'O+') echo "selected" ?>>O+</option> 
                             <option value="O-" <?php if($data['blood_group'] == 'O-') echo "selected" ?>>O-</option> 
                             <option value="AB+"<?php if($data['blood_group'] == 'AB+') echo "selected" ?>>AB+</option> 
                             <option value="AB-"<?php if($data['blood_group'] == 'AB-') echo "selected" ?>>AB-</option> 
                             </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Religion <font color="red" size="4">*</font> </label>
                            <select name="religion" class="form-control" required>
                                 <option value="">--Select--</option>
                                 <option value="Islam"<?php if($data['religion'] == 'Islam') echo "selected" ?>>Islam</option> 
                                 <option value="Hindu"<?php if($data['religion'] == 'Hindu') echo "selected" ?>>Hindu</option> 
                                 <option value="Buddhist"<?php if($data['religion'] == 'Buddhist') echo "selected" ?>>Buddhist</option> 
                                 <option value="Khristan"<?php if($data['religion'] == 'Khristan') echo "selected" ?>>Khristan</option> 
                             </select>      
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Email <font color="red" size="4">*</font> </label>
                             <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile Number <font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="mobile_number" value="<?php echo $data['mobile_number'] ?>">      
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">National ID <font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['nid'] ?>" class="form-control" name="nid" >  
                        </div>
                    </div>
                </div>
                <h3 class="text-center" style="color: #2559ee">Present Address </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">House No.<font color="red" size="4">*</font> </label>
                            <input type="text" value="<?php echo $data['house'] ?>" class="form-control" name="house">      
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Holding No.<font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['holding'] ?>" class="form-control" name="holding" >  
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Road No.<font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['road'] ?>"  class="form-control" name="road">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Village <font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['village'] ?>" class="form-control" name="village">  
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Post Office<font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['post_office'] ?>" class="form-control" name="post_office" >  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Union Council<font color="red" size="4">*</font> </label>
                            <input type="text" value="<?php echo $data['union_council'] ?>" class="form-control" name="union_council">      
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">Thana <font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['thana'] ?>" class="form-control" name="thana" required>  
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">District <font color="red" size="4">*</font> </label>
                             <input type="text" value="<?php echo $data['district'] ?>" class="form-control" name="district" required>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Post Code <font color="red" size="4">*</font> </label>
                            <input type="text" value="<?php echo $data['post_code'] ?>" class="form-control" name="post_code" required>      
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4">*</font> </label>
                            <img src="view/front/uploads/governing/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"  onchange="readURL2(this);" />
                            <img id="blah2" src="#" alt=" " />
                        </div>
                    </div>
                </div> 
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/control_footer.php' ?>

