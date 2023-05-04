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
                                
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Add Section</button>
                            
                            

                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>EDUCATION VERSE</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Section</a></li>

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
           
                                        <h4 class="mt-0 header-title">Section</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sr.#</th>
                                                <th>Section Name</th>
                                                <th>Teacher</th>
                                                <th>Component</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                      <?php
                                            $sql = "SELECT * FROM `section` INNER JOIN education_stream ON section.stream_id=education_stream.stream_id INNER JOIN education_institute ON section.institute_id = education_institute.institute_id INNER JOIN program ON section.program_id = program.program_id INNER JOIN program_components ON section.component_id = program_components.components_id INNER JOIN user ON section.teacher_assign = user.user_id";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $counter=0;
                                          while($row = $result->fetch_assoc()) {
                                          $counter = $counter + 1;
                                          
                                          ?>
                                            <tr>
                                                <td><?= $counter?></td>
                                                <td><?= $row['section_name']?></td>
                                                <td><?= $row['name']?></td>
                                                <td><?= $row['component_name']?></td>
                                            
                                                <td>
                                                        <div class="dropdown d-inline-block float-right">
                                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                                <a class="dropdown-item" href="viewsection.php?sid=<?= $row['section_id'] ?>">View</a>
                                                                <a class="dropdown-item" href="updatesection.php?sid=<?= $row['section_id'] ?>">Update</a>
                                                                <a class="dropdown-item" href="../backend/deletesection.php?sid=<?= $row['section_id'] ?>">Delete</a>
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
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add Section </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                                    <form method="POST" action="../backend/addsection.php">
                                                    <div class="modal-body">
                                                    <div class="row">
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
                                                                    
                                                                            
                                                                            
                                                                            ?>   
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
  <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Program</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Program_Name">
                                                                    <option>Select</option>
                                                                    
                                                                                                                                                          <?php
                                                                            $sql = "SELECT * FROM `program`";
                                                                        $result = $conn->query($sql);
                                                                        
                                                                        if ($result->num_rows > 0) {
                                                                          while($row = $result->fetch_assoc()) {
                                                                          
                                                                          ?>
                                                                          
                                                                      <option Value="<?= $row['program_id']?>"><?= $row['program_name']?></option>
                                                                          
                                                                          
                                                                          
                                                                          <?php
                                                                          }
                                                                        } else {
                                                                          echo "0 results";
                                                                        }
                                                                    
                                                                            
                                                                            
                                                                            ?>   
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                       
                                                       
                                                       </div>

                                                      
                                                     
                                                       <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Section Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Section_Name" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                           
                          
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Institute</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Education_institute">
                                                                    <option>Select</option>
                                                                    
                                                                                                                                                          <?php
                                                                            $sql = "SELECT * FROM `education_institute`";
                                                                        $result = $conn->query($sql);
                                                                        
                                                                        if ($result->num_rows > 0) {
                                                                          while($row = $result->fetch_assoc()) {
                                                                          
                                                                          ?>
                                                                          
                                                                      <option Value="<?= $row['institute_id']?>"><?= $row['institute_name']?></option>
                                                                          
                                                                          
                                                                          
                                                                          <?php
                                                                          }
                                                                        } else {
                                                                          echo "0 results";
                                                                        }
                                                                    
                                                                            
                                                                            
                                                                            ?>   
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Component</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Program_component">
                                                                    <option>Select</option>
                                                                    
                                                                                                                                                          <?php
                                                                            $sql = "SELECT * FROM `program_components`";
                                                                        $result = $conn->query($sql);
                                                                        
                                                                        if ($result->num_rows > 0) {
                                                                          while($row = $result->fetch_assoc()) {
                                                                          
                                                                          ?>
                                                                          
                                                                      <option Value="<?= $row['components_id']?>"><?= $row['component_name']?></option>
                                                                          
                                                                          
                                                                          
                                                                          <?php
                                                                          }
                                                                        } else {
                                                                          echo "0 results";
                                                                        }
                                                                    
                                                                            
                                                                            
                                                                            ?>   
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                       
                                                       
                                                       </div>
                                                       
                                                       
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Teacher</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Teacher_Name">
                                                                    <option>Select</option>
                                                                    
                                                                                                                                                          <?php
                                                                            $sql = "SELECT * FROM `user` WHERE `user_role`='teacher/trainer'";
                                                                        $result = $conn->query($sql);
                                                                        
                                                                        if ($result->num_rows > 0) {
                                                                          while($row = $result->fetch_assoc()) {
                                                                          
                                                                          ?>
                                                                          
                                                                      <option Value="<?= $row['user_id']?>"><?= $row['name']?></option>
                                                                          
                                                                          
                                                                          
                                                                          <?php
                                                                          }
                                                                        } else {
                                                                          echo "0 results";
                                                                        }
                                                                    
                                                                            
                                                                            
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