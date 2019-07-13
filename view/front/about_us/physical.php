<?php 
include_once'../includes/header.php'; 

$data = $gov->single_fetch('physical',1);
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
           <h1 style="font-size:22px;text-align:center;color:#D083CF">Physical Infrastructure</h1>
            <div class=""> 
                <p><b>Number of Buildings : <?php echo $data['building'] ?></b></p>
                <p><b>Number of Class Room : <?php echo $data['class_room'] ?></b></p>
                <p><b>Number of Students : <?php echo $data['student'] ?></b></p>
                <p><b>Number of Multi-media Class Room : <?php echo $data['multi_class'] ?></b></p>
                <p><b>Number of Computer Lab : <?php echo $data['computer_lab'] ?></b></p>
                <p><b>Number of School Ground : <?php echo $data['school_ground'] ?></b></p>
                <p><b>Number of Vehicles : <?php echo $data['vehicle'] ?></b></p>
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
        <?php include_once'../includes/single_sidebar.php' ?>
      </div>
    </div>
  </section>

  <?php include_once'../includes/footer.php'; ?>
