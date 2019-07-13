		<div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>কপিরাইট © ২০১১ - ২০১৮ ইহ্সান সফটওয়্যার  কর্তৃক সর্বস্বত্ত্ব সংরক্ষিত (ইহসান গ্রুপের একটি অঙ্গ প্রতিষ্ঠান) । <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="assets/front/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/jquery.simplePagination.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="assets/front/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="assets/front/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="assets/front/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="assets/front/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="assets/front/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="assets/front/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="assets/front/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/front/js/counterup/waypoints.min.js"></script>
    <script src="assets/front/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="assets/front/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/front/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="assets/front/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/front/js/metisMenu/metisMenu-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="assets/front/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="assets/front/js/datapicker/datepicker-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="assets/front/js/morrisjs/raphael-min.js"></script>
    <script src="assets/front/js/morrisjs/morris.js"></script>
    <script src="assets/front/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="assets/front/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/front/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/front/js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="assets/front/js/data-table/bootstrap-table.js"></script>
    <script src="assets/front/js/data-table/tableExport.js"></script>
    <script src="assets/front/js/data-table/data-table-active.js"></script>
    <script src="assets/front/js/data-table/bootstrap-table-editable.js"></script>
    <script src="assets/front/js/data-table/bootstrap-editable.js"></script>
    <script src="assets/front/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="assets/front/js/data-table/colResizable-1.5.source.js"></script>
    <script src="assets/front/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="assets/front/js/editable/jquery.mockjax.js"></script>
    <script src="assets/front/js/editable/mock-active.js"></script>
    <script src="assets/front/js/editable/select2.js"></script>
    <script src="assets/front/js/editable/moment.min.js"></script>
    <script src="assets/front/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="assets/front/js/editable/bootstrap-editable.js"></script>
    <script src="assets/front/js/editable/xediable-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="assets/front/js/calendar/moment.min.js"></script>
    <script src="assets/front/js/calendar/fullcalendar.min.js"></script>
    <script src="assets/front/js/calendar/fullcalendar-active.js"></script>
	
	<!-- maskedinput JS
		============================================ -->
    <script src="assets/front/js/jquery.maskedinput.min.js"></script>
    <script src="assets/front/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="assets/front/js/datepicker/jquery-ui.min.js"></script>
    <script src="assets/front/js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="assets/front/js/form-validation/jquery.form.min.js"></script>
    <script src="assets/front/js/form-validation/jquery.validate.min.js"></script>
    <script src="assets/front/js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="assets/front/js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="assets/front/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="assets/front/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="assets/front/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="assets/front/js/tawk-chat.js"></script>

    <script type="text/javascript">
         $(document).ready(function () {
            $('.alert').delay(4000).fadeOut(2000,function () {
               $(this).alert('close');
            });
        });
    
$('#sbmt').on('click', function (e) {
    e.preventDefault();
    var $li = $('.nav-tabs').find('li'),
        i = $li.siblings('.active').index(),
        max = $li.length;
    
    if (i < max) {
       $li.find('[role="tab"]').eq(i+1).tab('show');
    }
});

$(function () {
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
    });
});
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" name="image[]" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });    
 }); 
    // var add_row=1;
    // function addRow(){
    
    // html='';
    // html+='<div id="add_div'+add_row+'">';
    // html+='<br>Name: <input type="file" name="image[]" id="txtname"/> <input value="Remove" onclick="javascript:RemoveRow('+add_row+')" type="button" />';
    // html+='</div>';
    
    // $("#add_div").append(html);
    // add_row++;
    // }
    // function RemoveRow(add_row){
    //     $("#add_div"+add_row).remove();
    
    // }
</script>
</body>
</html>