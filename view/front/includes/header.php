<?php
include_once '../../../vendor/autoload.php';
use App\Front\Fetch\Fetch;

$gov = new Fetch();
$basic_info = $gov->single_fetch('basic_info',1);
$contact = $gov->single_fetch('governing_council','active');
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $basic_info['school_name'] ?></title>
<base href="http://localhost/frontadmin/">
<link rel="shortcut icon" href="assets/front/images/ehsan soft logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .hover>div>li>a{
    color: #fff;
    padding-top: 4px;
    padding-bottom: 4px;
  }
  .hover>div>li:hover{
   background-color: #d083cf;
  }
  .hover>div>li{
    padding: 7px 10px;
    clear: both;
    text-decoration: ;
  }
  #navArea{
    padding: 0px 0px;
    /*width: 1200px;*/
  }
  .header_top{
    padding: 0px 0px;
  }
  .goog-te-gadget-simple {
   background-color: #F2184F !important; 
   color: #fff;
   background-image: none;
   border-left: none; 
   border-top: none; 
   border-bottom: 0px; 
   border-right: 0px; 
   font-size: 10pt; 
  display: inline-block;
   padding-top: 0px; 
   padding-bottom: 0px; 
  cursor: pointer;
  zoom: 1;
  display: inline;
  margin-bottom:-5px;
}
.goog-te-gadget-simple .goog-te-menu-value {
   color: #fff; 
}
.add_banner{
  background-image: url(pp.jpg);
  width: 971px;
  height: 100px;
  text-align: center;
}

.logo2 img{
  width: 100px;
  height: 100%;
  margin-top: -69px;
  margin-left: 871px;
}

/*.backimg{
 background-image: url("view/front/includes/pp.jpg");
 background-repeat: no-repeat;
 background-size: 971px 100px;
 opacity: ;
        
}*/
.backimg {
  background-image: url("view/front/uploads/basic/<?php echo $basic_info['image'] ?>");
  background-repeat: no-repeat;
  background-size: 1140px 130px;
  opacity: ;
}
.sc{
        text-align: center;
        /*padding-top: 7px;*/
        /*padding-bottom: 5px;*/
        font-style: italic;
        text-shadow:5px 5px 10px #1AA644;
    }
.header-wrapper {
  z-index: 9;
  position: relative;
  background-color: #1aa644;
  
}
.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  bottom: 0; 
}
</style>
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container" style="margin-bottom:0px;">
  <header id="header" style="margin-top:0px;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:-5px;">  
        <div class="header_top" style="background-color:#F2184F !important;">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="http://www.worldehsan.com" target="_blank">Ehsan Soft</a></li>  
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Board Result</a>
                <ul class="dropdown-menu" role="menu" style="background-color:#000;font-family:'',sans-serif;">
                    <li><a href="http://eboardresults.com/app/" target="_blank">Result Publication System</a></li>
                    <li><a href="view/front/information/educationboardresult.php">SSC Board Result</a></li>
                    <li><a href="view/front/information/primaryboardresult.php">Primary Result</a></li>
                </ul>
              </li>
              <li style="color:#fff;">
                <div class="lantra">  

          <div id="google_translate_element"> </div>

            <script type="text/javascript">

            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div> 
              </li>
            </ul>
          </div>
          <div class="header_top_right">

           <p> <?php $str = date('m-d-Y');
                //$dateObj = DateTime::createFromFormat('m-d-Y', $str);
                $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
echo $dt->format('F j, Y, g:i a'); ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12" class="">
        <div class="header_bottom backimg" style="background-color:">
          <div class="logo_area"><a href="index.php" class="logo"><img class="img-rounded" src="view/front/uploads/basic/<?php echo $basic_info['school_logo'] ?>" width="100" height="100" alt=""></a></div>
          <!-- <p style="">শিক্ষা নিয়ে গর্ব দেশ শেখ হাসিনার বাংলাদেশ </p> -->
          <div class="add_banner " style="padding-top:;"> <h3 class="sc" style="color:#1AA644; margin-top:2px;"><?php echo $basic_info['school_name'] ?></h3><p style="color:#fff;">Established: <?php echo $basic_info['year'] ?> </p>
          <div class="logo_area"><a href="index.php" class="logo2"><img align="right" class="img-rounded" src="view/front/uploads/basic/<?php echo $basic_info['right_logo'] ?>" width="100" height="100" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea" class="header-wrapper sticky">
    <nav class="navbar navbar-inverse  " role="navigation" style="background-color:#202C45 !important">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse header-wrapper">
        <ul class="nav navbar-nav main_nav ">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">At a glance</a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="view/front/ataglance/governing_council.php">Governing Council </a></li>
                <li><a href="view/front/ataglance/managing_committe.php">Managing Committe</a></li>
                <li><a href="view/front/ataglance/teacher_info.php">Teacher Information</a></li>
                <li><a href="view/front/ataglance/student_info.php">Student Information</a></li>
                <li><a href="view/front/ataglance/employe_info.php">Employe Information</a></li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us</a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-7">
                  <li><a href="view/front/about_us/tno_speech.php">TNO message</a></li>
                  <li><a href="view/front/about_us/president_speech.php">President message</a></li>
                  <li><a href="view/front/about_us/principle_speech.php">Principle message</a></li>
                  <li><a href="view/front/about_us/vice_principle_speech.php">Vice Principle message</a></li>
                  <li><a href="view/front/about_us/history.php">History of institution</a></li>
                </div>
                <div class="col-md-5">
                  <li><a href="view/front/about_us/law.php">School Law</a></li>
                  <li><a href="view/front/about_us/goal.php">Goal & Purpose</a></li>
                  <li><a href="view/front/about_us/achievement.php"> Achievement & Success</a></li>
                  <li><a href="view/front/about_us/physical.php">Physical infrastructure</a></li>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information </a>
            <ul class="dropdown-menu" role="menu" style="min-width:420px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
                <li><a href="view/front/information/vacancy.php">Vacancy</a>
                  <li><a href="view/front/information/news.php">News</a></li>
                <li><a href="view/front/information/holiday.php">Holiday List</a></li> 
                <li><a href="view/front/information/facility.php">Facilities</a></li>
                <li><a href="view/front/information/library.php">Library</a></li>
                <li><a href="http://www.muktopaath.gov.bd" target="_blank">Free lession</a></li>
                </div>
                <div class="col-md-7">
                <li><a href="http://www.teachers.gov.bd" target="_blank">Teachers Batayon  </a></li>
                <li><a href="http://www.konnect.edu.bd" target="_blank">Teenager  Batayon  </a></li>      
                <li><a href="view/front/information/x_principle.php">Former Principles</a></li>
                <li><a href="view/front/information/x_teacher.php">Former Teachers</a></li>
                <li><a href="view/front/information/x_member.php">Former Committe Members</a></li>

                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic</a>
            <ul class="dropdown-menu" role="menu" style="min-width:450px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-6">
                  <li><a href="view/front/academic/class_routine.php">Class Routine</a></li>
                  <li><a href="view/front/academic/exam_routine.php">Examination Routine</a></li>
                  <li><a href="view/front/academic/exam_result.php">Examination Result</a></li>
                <li><a href="view/front/academic/calender.php">Academic Calender</a></li>
                <li><a href="view/front/academic/parents_guideline.php">Guidelines for Parents</a></li>      
                </div>
                <div class="col-md-6">  
                <li><a href="view/front/academic/book_list.php">Text Book List</a></li>
                <li><a href="view/front/academic/photo_gallery.php">Photo Gallery</a></li>
                <li><a href="view/front/academic/video_gallery.php">Video Gallery</a></li>         
                <li><a href="http://www.educationboardresults.gov.bd/" target="_blank">Board Result</a></li>
                <li><a href="http://www.ebook.gov.bd/" target="_blank">E-book</a>                      
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events </a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
                    <li><a href="view/front/events/yellow.php">Yellow bird</a></li>
                  <li><a href="view/front/events/scout.php">Scout</a></li>
                  <li><a href="view/front/events/girl_guide.php">Girls' Guide</a></li>
                  <li><a href="view/front/events/red_cresent.php">Red Cresent</a></li>
                  <li><a href="view/front/events/display.php">Display</a></li>
                      
                </div>
                <div class="col-md-7">
                  <li><a href="view/front/events/volunteer.php">Volunteer</a></li> 
                 <li><a href="view/front/events/milad.php">Annual  Milad mahfil</a></li>
                  <li><a href="view/front/events/parliament.php">Student parliament</a></li> 
                  <li><a href="view/front/events/sports.php">Sports Competition</a></li>
                  <li><a href="view/front/events/culture.php">cultural program</a></li>
                </div>
              </div>
            </ul>
          </li>    
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admission</a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="view/front/notice/admission_notice.php">Admission Notice</a></li>
            <li><a href="view/front/apply_online/application_form.php">Apply Online </a></li>
                <li><a href="view/front/notice/admission_guideline.php">Admission Guidelines</a></li>
                <li><a href="view/front/notice/admission_result.php">Admission Results</a></li>
              <li><a href="view/front/notice/tution.php">Fees & Payments</a></li>
            </ul>
          </li> 
           <li><a href="view/front/contact/contact.php">Contact </a></li>
          <li style="text-align:;"><a href="view/front/login.php">Log In</a></li>
        </ul>
      </div>
    </nav>
  </section>
  
 