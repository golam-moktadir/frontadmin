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
              <li><a href="#">Teachers Batayon</a></li>
              <li><a href="#">Free Lession</a></li>             
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