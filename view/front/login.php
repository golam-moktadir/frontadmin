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
    
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
                <p>This is the best app ever!</p>
				<p style="color: green;">
                    <?php 
                        if(isset($_GET['success_msg'])){
                        echo $_GET['success_msg'];
                        } 
                    ?>
                </p>
                <p style="color: red;">
                    <?php
                        if(isset($_GET['error_msg'])){
                        echo $_GET['error_msg'];
                        } 
                    ?>
                </p>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="login.php" method="post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="user_name">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you user_name" required="" value="" name="user_name" id="user_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="user_pass">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="user_pass" id="user_pass" class="form-control">
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                            <div id="loginForm">
                            <a class="btn btn-default btn-block" href="register.php">Register</a>
                            </div>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="">Ehsan Software</a></p>
			</div>
		</div>   
    </div>
</body>

</html>