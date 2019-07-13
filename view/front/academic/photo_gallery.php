<?php 
include_once'../includes/header.php'; 

$value = $gov->multi_fetch('photo',1);
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
            <h1 style="font-size:22px;text-align:center;"><p style="color:#D083CF">Photo Gallery</p></h1><br>
            <div class=""> 
             <p style="text-align:justify;">
             	<?php 
             		foreach($value as $data){
             	?>
             	<img src="view/front/uploads/photo/<?php echo $data['image'] ?>" width="200" height="200">
             	<?php
             	} 
             	?>
             </p>
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
        <?php include_once'../includes/single_sidebar.php'?>
      </div>
    </div>
  </section>

  <?php include_once'../includes/footer.php'; ?>
