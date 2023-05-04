<?php 
session_start();
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
                                
                                           
                            

                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>EDUCATION VERSE</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Update Component</a></li>

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
                                            if(isset($_SESSION['adduser_success'])){
                                                ?>
                                                
                                                     <div class="alert alert-outline-warning alert-warning-shadow mb-0 alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong><?= $_SESSION['adduser_success']?>
                                                    </div> 
           
                                                
                                                
                                                
                                                
                                                <?php
                                            }unset($_SESSION['adduser_success']);
                                        
                                        ?>
                                        
                                     
                                        
                                        
                                        
                                        
                                        <h4 class="mt-0 header-title">Update Component</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
                                        
                                        <?php
                                        
                                                
                                                $cid = $_GET['cid'];                                        
                                                $sql = "SELECT * FROM `program_components` WHERE `components_id`='$cid'";
                                                $result = $conn->query($sql);
                                                
                                                if ($result->num_rows > 0) {
                                                  $row = $result->fetch_assoc();
                                       
                                    
                                        ?>
                                        
                     
                                        
                                        
                                   
                                                    <form method="POST" action="../backend/updateprogramcomponents.php">
                                                    <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        
                                                       
                                                                <input class="form-control" type="hidden" name="Component_id" value="<?= $cid?>" id="example-text-input">
                                                               
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_name" id="example-text-input" value="<?= $row['component_name']?>">
                                                            </div>
                                                       
                                                         </div>
                                                         
                                                  
                                                         
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Component Type</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Component_type">
                                                                    <option>Select</option>
                                                                    
                                                                    
                                                                          
                                                                      <option Value="MODULE"<?php if($row['component_type']=="MODULE"){
                                                                                   echo "selected";
                                                                                  } ?>>MODULE</option>
                                                                      <option Value="SEMESTER" <?php if($row['component_type']=="SEMESTER"){
                                                                                   echo "selected";
                                                                                  } ?>>SEMESTER</option>
                                                                      <option Value="YEAR" <?php if($row['component_type']=="YEAR"){
                                                                                   echo "selected";
                                                                                  } ?>>YEAR</option>
                                                                                                  
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                           
                          
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                       
                                                                                     <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Code</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_code" id="example-text-input" value="<?= $row['component_code']?>">
                                                            </div>
                                                       
                                                         </div>
                          
                                                       <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Component Fee</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Component_fees" id="example-text-input"  value="<?= $row['component_fees']?>">
                                                            </div>
                                                       
                                                         </div>
                          
                                                       

                                                                  
                                          
                                            </div>
                                        </div>   
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                   </form> 
                                                   
                                                   
                                            <?php
                                                               
                                                } else {
                                                  echo "0 results";
                                                }
                                                $conn->close();
                                                           
                                            
                                            
                                            ?>       
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                    
                                       
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

        
                        
</div><!-- container -->

                                     

                                                        
                            


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