<?php
include_once 'vendor/autoload.php';
use App\Front\Fetch\Fetch;

$gov = new Fetch();
$basic_info = $gov->single_fetch('basic_info',1);
$president = $gov->single_fetch('speech',2);
$principle = $gov->single_fetch('speech',3);
$vice_principle = $gov->single_fetch('speech',4);
$institution = $gov->single_fetch('institution',1);
$category_value = $gov->multi_fetch('link_category',1);
$link_value = $gov->multi_fetch('link',1);
$news_value = $gov->multi_fetch('news',1);
$social_link = $gov->single_fetch('social_logo',1);
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
                  <li><a href="view/front/about_us/achievement.php"> Achievement ও Success</a></li>
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
                <li><a href="view/front/information/2018 Vacation Notice .pdf" target="_blank">Holiday List</a></li> 
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
                <li><a href="view/front/information/404.php">Others</a></li>
            </ul>
          </li> 
           <li><a href="view/front/contact/contact.php">Contact </a></li>
          <li style="text-align:;"><a href="view/front/login.php">Log In</a></li>
        </ul>
      </div>
    </nav>
  </section>
<style>
  .single_sidebar > ul > li a:hover{color:#d083cf}
  .single_page_content > img{
    max-width: 100%;
    width: 210px;
    height: 210px;
    margin-bottom: 15px;
  }
  .single_page_content{
    border-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
  }

</style>
<?php include_once'view/front/includes/news_section.php'?>
 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/1.JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>       
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(2).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(3).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(4).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>     
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
            <?php  include_once'view/front/includes/single_sidebar.php' ?>  
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              
              <li style="color:white;" class="active">স্কুলের তথ্য  ও ছবি </li>
            </ol>
            
           <!--  <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>pfbrghs</a> <span><i class="fa fa-calendar"></i><?php echo date('h:m') ?></span> <a href="#"><i class="fa fa-tags"></i>Info</a> </div> -->

            <div class="row">

              <div class="col-md-12">
                <h1 style="font-size:22px;text-align:center;"><p style="color:#D083CF">History Of Institution</p>   </h1>
                <hr>
                  <div class="single_page_content">
                <p style="text-align:justify;"><?php echo $institution['history'] ?>
<br>
<br>
<strong style="font-size:22px"> Establishment: </strong>
<br>
০১-০১-১৯৬৮ ইং সনে নিম্নলিখিত স্থানীয় বিদ্যোৎসাহী ও দাতাগণের প্রচেষ্টায় প্রত্যন্ত গ্রামে শিক্ষা বিস্তারের লক্ষ্যে অত্র ইউনিয়নের মধ্যে সর্বপ্রথম বিদ্যালয়টি স্থাপন করা হয়।</p>
                </div>               
              </div>
            </div>
            <div class="row">
            <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF">President's Speech</p><?php echo $president['name'] ?></h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="view/front/uploads/speech/<?php echo $president['image'] ?>" alt="">
               
              <p style="text-align:justify;"><?php echo substr($president['speech'],0,100) ?>... </p><h5><a style="color:#D083CF" href="view/front/about_us/president_speech.php">Read More...</a> </h5> 
                         
              </div>
            </div>

              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF">Principle's Speech</p><?php echo $principle['name'] ?></h1>
               <br>
                
                <div class="single_page_content"> <img class="img-center img-rounded" src="view/front/uploads/speech/<?php echo $principle['image'] ?>" alt="">

              <p style="text-align:justify;"><?php echo substr($principle['speech'],0,100) ?>...<h5><a style="color:#D083CF" href="view/front/about_us/principle_speech.php">Read More...</a> </h5></p>

                         
            </div>
              </div>
              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF;">Vice Principle's Speech</p><?php echo $vice_principle['name']?></h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="view/front/uploads/speech/<?php echo $vice_principle['image']?>" alt="">
              <p  style="text-align:justify;"><?php echo substr($vice_principle['speech'],0,100) ?>...<h5><a style="color:#D083CF" href="view/front/about_us/vice_principle_speech.php"><b>Read More...</a> </h5> </p>
                         
            </div>
            </div>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <?php include('view/front/includes/sociallink_nav.php') ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar wow ">
            <h2><span>Google Map </span></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d28968.277565949553!2d89.3201913063591!3d24.82848706359003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39fc543bb1d5cce7%3A0xa33e907dbc001fa3!2sFapore!3m2!1d24.825570199999998!2d89.32743909999999!5e0!3m2!1sen!2sbd!4v1512292908154" width="340" height="250" frameborder="0" style="border:0" allowfullscreen></iframe> 

            <h2>Online Reader</h2>
              <!-- <div id='visitor' style="text-align:center;">
                <img src="http://services.webestools.com/cpt_global/43826-2.png" alt="Global Counter" />
              </div> -->
              <div style="text-align:center;"><script type="text/javascript" src="http://services.webestools.com/cpt_pages_views/64724-11-1.js"></script></div><a href="http://www.webestools.com/" style="display:block;text-align:center;" title="Tools services webmasters counters generators scripts tutorials free"><img src="http://www.webestools.com/images/ban03.gif" alt="Tools services webmasters counters generators scripts tutorials free" /></a>
          </div>
        </aside>
      </div>
    </div>
  </section>
<div class='bottomcatbox'>
 <footer id="footer" style="margin-bottom:0px;">
    <div class="footer_top" style="background-color:#202C45 !important">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig" style="float:0;">
            <h2>Picture</h2>
            <ul class="tag_nav">
              <li><a href="view/front/academic/photo_gallery.php">Photo Gallerry </a></li>
              <li><a href="view/front/academic/video_gallery.php">Video Gallerry</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Government Website</h2>
            <ul class="tag_nav">
              <li><a href="http://www.teachers.gov.bd" target="_blank">Teachers Batayon</a></li>
              <li><a href="http://www.muktopaath.gov.bd" target="_blank">Free Lession</a></li>             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div>
            <h3>Contact:</h2>
            <p><?php echo $basic_info['thana'] ?>, District: <?php echo $basic_info['district'] ?></p>
            <address>
             Mobile No.: <?php echo $contact['mobile_number'] ?><br> Email: <?php echo $contact['email'] ?>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom" style="text-align:center;background-color: #F2184F !important">
      <p class="copyright" style="text-align:left;">Copyright &copy; 2011 - <?= date('Y') ?> <a href="http://www.worldehsan.com/">Ehsan Software (A Sister Concern of Ehsan Group).</a></p>
      <p class="developer" style="color:#fff;">Marketing By: Ehsan Marketing (EM)</p>
    </div>
  </footer>
</div>
<script src="assets/front/assets/js/jquery.min.js"></script> 
<script src="assets/front/assets/js/wow.min.js"></script> 
<script src="assets/front/assets/js/bootstrap.min.js"></script> 
<script src="assets/front/assets/js/slick.min.js"></script> 
<script src="assets/front/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/front/assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/front/assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/front/assets/js/custom.js"></script>

<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }

    $(document).ready(function () {
        $('.alert').delay(3000).fadeOut(2000,function () {
            $(this).alert('close');
        });
    });

</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function($) {
        $('#printDiv').click(function (evt) {
            evt.preventDefault();
            $('#printableArea').printElement(
                {
                    overrideElementCSS: [
                        'assets/front/assets/css/bootstrap.min.css',
                        {
                            href: '/assets/front/assets/css/bootstrap.min.css',
                            media: 'print'
                        },
                    ],
                });
        });
    });
</script>

</body>
</html>
