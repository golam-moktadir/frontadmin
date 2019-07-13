<?php 
if(!isset($_SESSION)){  
  session_start();
}
$_SESSION['username'] = "admin";
$_SESSION['type'] = "administrator";
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Ehsan Software  </title>
    <base href="http://localhost/frontadmin/">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/front/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/front/css/owl.theme.css">
    <link rel="stylesheet" href="assets/front/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/front/css/metisMenu/metisMenu-vertical.css">   
     <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/front/css/datapicker/datepicker3.css">

    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/front/css/calendar/fullcalendar.print.min.css">
   <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/form/all-type-forms.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/dropzone/dropzone.css">
	<!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/front/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="assets/front/css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/front/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/front/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="assets/front/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
        
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah4')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <br>
                <h3><a>Ehsan Software</a></h3>     
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">AT A GLANCE</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Governing Council</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/governing/index.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/governing/managing_committe.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Student Info</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href=""><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href=""><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Employe Info</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href=""><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href=""><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Assets</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href=""><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href=""><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">ABOUT US</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>TNO Message</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/speech/tno_speech.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/speech/add_tno_speech.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li> 
                                 <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>President Message</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/speech/president_speech.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/speech/add_president_speech.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Principle Speech</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/speech/principle_speech.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/speech/add_principle_speech.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Vice-principle Speech</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/speech/vice_principle_speech.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/speech/add_vice_speech.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>History of Institution</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/institution/institution_history.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/institution/add_institution_info.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>School Law</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/law/law.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/law/add_law.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Goal & Purpose</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/goal/goal.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/goal/add_goal.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Achievement & Success</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/achievement/achievement.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/achievement/add_achievement.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Physical Infrastructure</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/physical/physical.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/physical/add_physical.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">INFORMATION</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Vacancy</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/vacancy/vacancy.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/vacancy/add_vacancy.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>News</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/news/news.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/news/add_news.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Holiday</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/holiday/holiday.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/holiday/add_holiday.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Facilities</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/facility/facility.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/facility/add_facility.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Library</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/library/library.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/library/add_book.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Former</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/former/x_principle.php"><small class="mini-sub-pro">Principles</small></a></li>
                                        <li><a href="view/front/former/x_member.php"><small class="mini-sub-pro">Members</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>School Info</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/basic/basic_info.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/basic/add_basic_info.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">ACADEMIC</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Class Routine</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/routine/class_routine.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/routine/add_class_routine.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Exam Routine</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/routine/exam_routine.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/routine/add_exam_routine.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Exam Result</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/result/result.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/result/add_result.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Calender</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/calender/calender.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/calender/add_calender.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Parents Guideline </b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/parents/parents.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/parents/add_guide_parents.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Text Book</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/book/book.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/book/add_book.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Photo Gallery</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/photo/photo.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/photo/add_photo.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Video Gallery</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/video/video.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/video/add_video.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">EVENTS</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Yellow Bird</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/yellow/yellow.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/yellow/add_yellow.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Scout</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/scout/scout.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/scout/add_scout.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Girls' Guide</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/girl_guide/girl_guide.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/girl_guide/add_girl_guide.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Red Cresent</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/red_cresent/red_cresent.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/red_cresent/add_red.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Display</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/display/display.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/display/add_display.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Volunteer</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/volunteer/volunteer.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/volunteer/add_volunteer.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Milad Mahfil</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/milad/milad.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/milad/add_milad.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Student Parliament</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/parliament/parliament.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/parliament/add_parliament.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Sports Competition</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/sports/sports.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/sports/add_sports.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Cultural Program</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/culture/culture.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/culture/add_culture.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                             <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">ADMISSION</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Admission Notice</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/admission/admission_notice.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/admission/add_admission.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Admission Guideline</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/admission/guideline.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/admission/add_guideline.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Admission Result</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/admission/admission_result.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/admission/add_admission_result.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Fees and Scholarship</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/tution/tution_fees.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/tution/add_tution.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="view/front/apply_online/application_form.php" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Apply Online</b></small></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">LINKS</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Link Category</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/link/link_category.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/link/add_link_category.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Links</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/link/link.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/link/add_link.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Social Logo</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/social_logo/social_logo.php"><small class="mini-sub-pro">Dashboard</small></a></li>
                                        <li><a href="view/front/social_logo/add_social_logo.php"><small class="mini-sub-pro">Add New</small></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="icon-wrap"></span> <small class="mini-click-non"><b>Marksheet</b></small></a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a href="view/front/marksheet/six_eight_form.php"><small class="mini-sub-pro">Six-eight</small></a></li>
                                        <li><a href="view/front/marksheet/nine_ten_form.php"><small class="mini-sub-pro">Nine-Ten</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="assets/front/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="view/front/index.php" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="index.php" class="nav-link" target="_blank">back to website</a>
                                                </li>
                                                
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demomi" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demomi" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Courses</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>