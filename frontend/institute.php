<?php 
session_start();
include '../backend/config.php';
include 'header.php';
include 'topbar.php';

if(isset($_SESSION['login_success'])){
  
?>
    <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                    <img src="../assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">Mr. Michael Hill </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Add Institute</button>
                            
                            

                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>EDUCATION VERSE</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Education Institute</a></li>

                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
           <?php include 'sidebar.php';?>
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                        
                                            
                                        <?php
                                        // var_dump($_SESSION['addinstitute_success']);
                                            if(isset($_SESSION['addinstitute_success'])){
                                                ?>
                                                
                                                     <div class="alert alert-outline-success alert-success-shadow mb-0 alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong><?= $_SESSION['addinstitute_success']?>
                                                    </div> 
           
                                                
                                                
                                                
                                                
                                                <?php
                                            }unset($_SESSION['addinstitute_success']);
                                        
                                        ?>
                                        
                                        
                                        
                                        
                                        
                                                 <?php
                                            if(isset($_SESSION['addinstitute_unsuccess'])){
                                                ?>
                                                
                                                     <div class="alert alert-outline-danger alert-danger-shadow mb-0 alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong><?= $_SESSION['addinstitute_unsuccess']?>
                                                    </div> 
           
                                                
                                                
                                                
                                                
                                                <?php
                                            }unset($_SESSION['addinstitute_unsuccess']);
                                        
                                        ?>
           
                                        <h4 class="mt-0 header-title">Education Institute</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sr.#</th>
                                                <th>Education Institute</th>
                                                <th>Education Stream</th>
                                                <th>Create Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                
                                                
                                             <?php
                                            $sql = "SELECT * FROM  education_institute INNER JOIN education_stream ON education_institute.stream_id=education_stream.stream_id";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $counter=0;
                                          while($row = $result->fetch_assoc()) {
                                          $counter = $counter + 1;
                                          
                                          ?>
                                          
                                          <tr>
                                                <td><?= $counter ?></td>
                                                <td><?= $row['institute_name']?></td> 
                                                <td><?= $row['stream_name']?></td>
                                                <td><?php 
                                                $Date = $row['create_date'];
                                                $date1 = explode(" ",$Date);
                                                $datesep = explode("-",$date1[0]);
                                                echo $datesep[2]."/".$datesep[1]."/".$datesep[0];
                                            
                                                
                                                ?>
                                                    </td>
                                                
                                        
                                                <td>
                                                        <div class="dropdown d-inline-block float-right">
                                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                                <a class="dropdown-item" href="viewinstitute.php?iid=<?= $row['institute_id']?>">View</a>
                                                                <a class="dropdown-item" href="updateinstitute.php?iid=<?= $row['institute_id']?>">Update</a>
                                                                <a class="dropdown-item" href="../backend/deleteinstitute.php?iid=<?= $row['institute_id']?>">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>
                                          
                                          
                                          
                                          <?php
                                          }
                                        } else {
                                          echo "0 results";
                                        }
                                      
                                            
                                            
                                            ?> 
                                                
                                                
                                           
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

        
                        
</div><!-- container -->

                                     

                                        <!-- sample modal content -->
                                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add Institute </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                                    <form method="POST" action="../backend/add_institute.php">
                                                    <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Institute" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>
                                            
                                                  <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute SpokePerson</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="SpokePerson" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>
                                                  <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Email</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="email" name="Email" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>
                                                  <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Contact</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="number" name="Contact" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>
                                                  <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Code</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Code" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>
                                                  <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Address</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Address" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Stream</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Education_stream">
                                                                    <option>Select</option>
                                                                    
                                                                              
                                            <?php
                                            $sql = "SELECT * FROM `education_stream`";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                          
                                          ?>
                                          
                                      <option Value="<?= $row['stream_id']?>"><?= $row['stream_name']?></option>
                                          
                                          
                                          
                                          <?php
                                          }
                                        } else {
                                          echo "0 results";
                                        }
                                        $conn->close();
                                            
                                            
                                            ?>   
                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                       


                                          
                                            </div>
                                        </div>   
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                   </form> 
                                                    
                                                    
                                                    
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->                                      
                            


                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <!-- Required datatable js -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="../assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>

<?php

}else{
      echo "
                    <script>
                        window.open('https://educationverse.org/frontend/login.php','_self');
                    </script>";
}
?>