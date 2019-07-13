<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Front\Fetch\Fetch;

$gov = new Fetch();

$category_value = $gov->multi_fetch('link_category',1);
$link_value = $gov->multi_fetch('link',1);
$news_value = $gov->multi_fetch('news',1);
$social_link = $gov->single_fetch('social_logo',1);
?>
<?php include_once'../includes/news_section.php'?>
 <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area" onload="">
            <h2>Contact Us</h2>
            <p><i id="error_email" style="color:red"></i></p>
            <?php
              if(isset($_GET['message'])){
                echo "<div class='alert alert-success'>".$_GET['message']."</div>";
              }
              ?>
            <form name="" action="view/front/contact/store_contact.php" onsubmit="return ValidateEmail()" class="contact_form" method="post">
              <input class="form-control" type="text" name="name" placeholder="Name*">
              <input class="form-control" type="text" id="email" name="email" placeholder="Email*">
              <textarea class="form-control" cols="30" rows="10"  name="message" placeholder="Message*" required></textarea>
              <input onclick="ValidateEmail()" type="submit" name="submit" value="Send Message">
            </form>
          </div>
          <script type="text/javascript">
            function ValidateEmail()
            {

                var fileInput = document.getElementById("email");
                var filePath = fileInput.value;

                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if(filePath ==""){
                    document.getElementById('error_email').innerHTML="Enter Email Address!!!";
                    return false;                  
                }
                if(!filePath.match(mailformat))
                {
                    document.getElementById('error_email').innerHTML="Invalid Email Address!!!";
                    return false;
                }
            }
          </script>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php include_once'../includes/single_sidebar.php'?>
      </div>
    </div>
  </section>

  <?php include_once'../includes/footer.php'; ?>
