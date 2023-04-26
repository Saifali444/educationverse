<?php 
include '../backend/config.php';
include 'header.php';
?>
        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div>
    
                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
    
                <ul class="list-unstyled topbar-nav mb-0">
                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>

                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                    
                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
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
                                
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Add Component</button>
                            
                            

                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>EDUCATION VERSE</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Program Component</a></li>

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
           
                                        <!--<h4 class="mt-0 header-title">Program Info </h4>-->
                                                    <?php
                                                    $pid = $_GET['pid'];
                                            $sql = "SELECT * FROM `program` INNER JOIN education_stream ON program.stream_id=education_stream.stream_id INNER JOIN education_institute ON program.institute_id = education_institute.institute_id WHERE program.program_id = '$pid'";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $counter=0;
                                          $row = $result->fetch_assoc();
                                          $counter = $counter + 1;
                                          
                                          $stream_id = $row['stream_id'];
                                          $institute_id = $row['institute_id'];
                                          $program_id = $_GET['pid']
                                          ?>
                                                  
                                                  <div class="row">
                                                      <div class="col-md-3">
                                                          <h4>Program Name:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_name']?></h4>
                                                      </div>
                                                       <div class="col-md-3">
                                                          <h4>Program Fee:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_fees']?></h4>
                                                      </div>
                                                      
                                                  </div>
                                                      <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Program Stream:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['stream_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Program Institute:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['institute_name']?></h4>
                                                      </div>
                                                     
                                                      
                                                  </div>
                                                  
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Program Duration:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_duration']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Program Code:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_code']?></h4>
                                                      </div>
                                                     
                                                      
                                                  </div>
                                                  
                                                       <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Program Status:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_status']?></h4>
                                                      </div>
                                                      </div>
                                                     
                                                      
                                                  </div>
                                                  
                                                  
                                            
                                          
                                              <?php
                                       
                                        } else {
                                          echo "0 results";
                                        }
                                      
                                            
                                            
                                            ?>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

         <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
           
                                        <h4 class="mt-0 header-title">Program Component</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sr.#</th>
                                                <th>Component Name</th>
                                                <th>Component Code</th>
                                                <th>Component Type</th>
                                                <th>Component Fee</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                      <?php
                                                      
                                                $pid = $_GET['pid'];
                                                $sql = "SELECT * FROM program_components INNER JOIN `program` ON program_components.program_id=program.program_id INNER JOIN education_stream ON program_components.stream_id=education_stream.stream_id INNER JOIN education_institute ON program_components.institute_id = education_institute.institute_id WHERE program.program_id ='$pid'";
                                                $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $counter=0;
                                          while($row = $result->fetch_assoc()) {
                                          $counter = $counter + 1;
                                          
                                          ?>
                                            <tr>
                                                <td><?= $counter?></td>
                                                <td><?= $row['component_name']?></td>
                                                <td><?= $row['component_code']?></td>
                                                <td><?= $row['component_type']?></td>
                                                <td><?= $row['component_fees']?></td>
                                                <td>
                                                        <div class="dropdown d-inline-block float-right">
                                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                               
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
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

                          
</div><!-- container -->

                                     

                                        <!-- sample modal content -->
                                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add Component </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                                    <form method="POST" action="../backend/addprogramcomponents.php">
                                                    <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        
                                                       
                                                                <input class="form-control" type="hidden" name="Stream_id" value="<?= $stream_id?> " id="example-text-input">
                                                                <input class="form-control" type="hidden" name="Institute_id" value="<?= $institute_id?>" id="example-text-input">
                                                                <input class="form-control" type="hidden" name="Program_id" value="<?= $program_id?>" id="example-text-input">

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_name" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                                                         
                                                  
                                                         
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Component Type</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Component_type">
                                                                    <option>Select</option>
                                                                    
                                                                    
                                                                          
                                                                      <option Value="MODULE">MODULE</option>
                                                                      <option Value="SEMESTER">SEMESTER</option>
                                                                      <option Value="YEAR">YEAR</option>
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                           
                          
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                       
                                                                                     <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Code</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_code" id="example-text-input">
                                                            </div>
                                                       
                                                         </div>
                          
                                                       <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Fee</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_fees" id="example-text-input">
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