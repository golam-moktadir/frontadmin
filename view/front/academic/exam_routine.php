<?php 
include_once'../includes/header.php'; 

$value = $gov->multi_fetch('routine',2);
$category_value = $gov->multi_fetch('link_category',1);
$link_value = $gov->multi_fetch('link',1);
$news_value = $gov->multi_fetch('news',1);
$social_link = $gov->single_fetch('social_logo',1);
?>
<?php include_once'../includes/news_section.php'?>
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
          <h2 style="color:#D083CF"><center>Examination Routine</center></h2><br>
            <div class="box-body" >
                <table style="border:1px solid #D083CF" id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Posted At</th>    
                        <th>Download</th>
                    </tr>
                    </thead>
                   <tbody>
                   	<?php 
                   		$i = 1;
                   		foreach($value as $data){
                   	?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><a href="view/front/uploads/routine/<?php echo $data['image'] ?>" target="_blank"> <?php echo $data['routine'] ?></a></td>
                    <td><?php echo $data['created_at'] ?></td>
                    <td><a href="view/front/uploads/routine/<?php echo $data['image'] ?>" target="_blank"><img width="80" height="80" src="view/front/uploads/icon/pdf.jpg"></a></td>
                   </tr>
                     <?php } ?>
                
                   </tbody>

                </table>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <?php include('../includes/sociallink_nav.php') ?>
              </ul>
            </div>
          </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php include_once'../includes/single_sidebar.php'?>
      </div>
    </div>
  <hr>
  </section>

  <?php include_once'../includes/footer.php'; ?>