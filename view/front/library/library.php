<?php include_once '../includes/control_header.php'; 

include_once '../../../vendor/autoload.php';
use App\Front\Library\Library;

$gov = new Library();
$value = $gov->view();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="sparkline13-graph">
                    <div class="datatable-dashv1-list custom-datatable-overright">
                      <h3 class="text-center" style="color: #2559ee">Library</h3>
                        <hr />
                         <?php
                          if(isset($_SESSION['message'])){
                            echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                            unset($_SESSION['message']);
                          }
            
                          ?>
                      <div id="toolbar">
                            <a href="view/front/library/add_book.php"><h3 class="box-title  btn btn-primary"><i class="fa fa-plus"></i> Add New</h3></a>
                        </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                         <th>Id</th>
                                          <th>Name of Book</th>
                                          <th>Writer Name</th>
                                          <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                   <?php 
                                       $i = 1;
                                       foreach($value as $data){
                                   ?>
                                   <tr>
                                       <td><?php echo $i++ ?></td>
                                       <td><?php echo $data['name'] ?></td>
                                       <td><?php echo $data['writer'] ?></td>
                                       <td>
                                           <a class="btn btn-success btn-xs" href="view/front/library/edit_library.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                                           <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/front/library/delete_library.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
                                       </td>
                                   </tr>
                               <?php } ?>
                                   </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.content -->
          </div>


<?php  include '../includes/control_footer.php' ?>

