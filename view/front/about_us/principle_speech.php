<?php 
include_once'../includes/header.php'; 

$data = $gov->single_fetch('speech',3);
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
          <div class="single_page">
            <!-- <ol class="breadcrumb">
              
              <li class="active"></li>
            </ol> -->
           <h1 style="font-size:22px;text-align:center;"><p style="color:#D083CF"> প্রধান শিক্ষকের বাণী:</p> <?php echo $data['name'] ?></h1>
           <!--  <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>FUPHS</a> <span><i class="fa fa-calendar"></i><?php echo date('y:m:h') ?></span> <a href="#"><i class="fa fa-tags"></i>Info</a> </div> -->
            <div class="">
            <br>
             <img class="img-center img-rounded" width="250 " height="220" src="view/front/uploads/speech/<?php echo $data['image'] ?>" alt="">
             <br>
                <p style="text-align:justify;"><?php echo $data['speech'] ?></p>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <?php include('../includes/sociallink_nav.php') ?>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php  include_once'../includes/single_sidebar.php' ?>
      </div>
    </div>
  </section>

  <?php include_once'../includes/footer.php'; ?>
