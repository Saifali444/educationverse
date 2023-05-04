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
                                
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Add User</button>
                            
                            

                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>EDUCATION VERSE</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">USERS</a></li>

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
                                        
                                     
                                        
                                        
                                        
                                        
                                        <h4 class="mt-0 header-title">Update USERS</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
                                        
                                        <?php
                                        
                                                
                                                $uid = $_GET['uid'];                                        
                                                $sql = "SELECT * FROM user INNER JOIN education_stream ON user.stream_id = education_stream.stream_id INNER JOIN education_institute ON user.institute_id = education_institute.institute_id WHERE `user_id`='$uid'";
                                                $result = $conn->query($sql);
                                                
                                                if ($result->num_rows > 0) {
                                                  $row = $result->fetch_assoc();
                                       
                                    
                                        ?>
                                        
                     
                                        
                                        
                                        
                                        
                                        
                                                    <form class="mt-4" method="POST" action="../backend/updateuser.php">
                                             
                                                            <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="text" name="Full_Name" id="example-text-input"  value="<?= $row['name'] ?>">
                                                                         <input class="form-control" type="hidden" name="user_id" id="example-text-input"  value="<?= $_GET['uid'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Father Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="text" name="Father_Name" id="example-text-input" value="<?= $row['father_name'] ?>">
                                                                    </div>
                                                                </div>
                                                                  <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Gender</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Gender">
                                                                            <option>Select</option>
                                                                            <option Value="MALE" <?php if($row['gender']=="MALE"){
                                                                                   echo "selected";
                                                                                  } ?>>MALE</option>
                                                                            <option Value="FEMALE" <?php if($row['gender']=="FEMALE"){
                                                                                   echo "selected";
                                                                                  } ?>>FEMALE</option>
                                                                            <option Value="OTHER" <?php if($row['gender']=="OTHER"){
                                                                                   echo "selected";
                                                                                  } ?>>OTHER</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-date-input" class="col-sm-2 col-form-label text-right">DOB</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="date" name="date_of_birth"  value="<?= $row['dob'] ?>" id="example-date-input">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Religion</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Religion">
                                                                            <option>Select</option>
                                                                            <option Value="ISLAM"  <?php if($row['religion']=="ISLAM"){
                                                                                     echo "selected";
                                                                                } ?>>Islam</option>
                                                                            <option Value="CHRISTIAN" <?php if($row['religion']=="CHRISTIAN"){
                                                                                   echo "selected";
                                                                                } ?>>Christian</option>
                                                                            <option Value="HINDU" <?php if($row['religion']=="HINDU"){
                                                                                   echo "selected";
                                                                                  } ?>>Hindu</option>
                                                                            <option Value="SIKHISM" <?php if($row['religion']=="SIKHISM"){
                                                                                   echo "selected";
                                                                                  } ?>>Sikkism</option> 
                                                                            <option Value="OTHER" <?php if($row['religion']=="OTHER"){
                                                                                   echo "selected";
                                                                                  } ?>>Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Marital Status</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Marital_Status">
                                                                            <option>Select</option>
                                                                            <option Value="SINGLE" <?php if($row['marital_status']=="SINGLE"){
                                                                                   echo "selected";
                                                                                  } ?>>Single</option>
                                                                            <option Value="MARRIED" <?php if($row['marital_status']=="MARRIED"){
                                                                                   echo "selected";
                                                                                  } ?>>Married</option>
                                                                            <option Value="DIVORCED" <?php if($row['marital_status']=="DIVORCED"){
                                                                                   echo "selected";
                                                                                  } ?>>Divorced</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Blood Group</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Blood_Group">
                                                                            <option>Select</option>
                                                                            <option Value="A+" <?php if($row['blood_group']=="A+"){
                                                                                   echo "selected";
                                                                                  } ?>>A+</option>
                                                                            <option Value="A-" <?php if($row['blood_group']=="A-"){
                                                                                   echo "selected";
                                                                                  } ?>>A-</option>
                                                                            <option Value="B+" <?php if($row['blood_group']=="B+"){
                                                                                   echo "selected";
                                                                                  } ?>>B+</option>
                                                                            <option Value="B-" <?php if($row['blood_group']=="B-"){
                                                                                   echo "selected";
                                                                                  } ?>>B-</option>
                                                                            <option Value="O+" <?php if($row['blood_group']=="O+"){
                                                                                   echo "selected";
                                                                                  } ?>>O+</option>
                                                                            <option Value="O-" <?php if($row['blood_group']=="O-"){
                                                                                   echo "selected";
                                                                                  } ?>>O-</option>
                                                                            <option Value="AB+" <?php if($row['blood_group']=="AB+"){
                                                                                   echo "selected";
                                                                                  } ?>>AB+</option>
                                                                            <option Value="AB-" <?php if($row['blood_group']=="AB-"){
                                                                                   echo "selected";
                                                                                  } ?>>AB-</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">User Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="text"  id="example-text-input" value="<?= $row['user_name'] ?>" disabled>
                                                                        <input class="form-control" type="hidden" name="User_Name" id="example-text-input" value="<?= $row['user_name'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">User Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="email" id="example-text-input" value="<?= $row['user_email'] ?>" disabled>
                                                                         <input class="form-control" type="hidden" name="User_Email" id="example-text-input" value="<?= $row['user_email'] ?>">
                                                                    </div>
                                                                </div>
                                                                
                                  
                                                    </div>
        
        
                                                    <div class="col-lg-6">
        
                                                        
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">User Role</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="User_Role">
                                                                            <option>Select</option>
                                                                            <option Value="superadmin" <?php if($row['user_role']=="superadmin"){
                                                                                   echo "selected";
                                                                                  } ?>>Super Admin</option>
                                                                            <option Value="admin" <?php if($row['user_role']=="admin"){
                                                                                   echo "selected";
                                                                                  } ?>>Admin</option>
                                                                            <option Value="teacher/trainer" <?php if($row['user_role']=="teacher/trainer"){
                                                                                   echo "selected";
                                                                                  } ?>>Teacher/ Trainer</option>
                                                                            <option Value="asstantteacher/facilitator" <?php if($row['user_role']=="asstantteacher/facilitator"){
                                                                                   echo "selected";
                                                                                  } ?>>Assitant Teacher/ Facilitator</option>
                                                                            <option Value="parent" <?php if($row['user_role']=="parent"){
                                                                                   echo "selected";
                                                                                  } ?>>Parent</option>
                                                                            <option Value="student" <?php if($row['user_role']=="student"){
                                                                                   echo "selected";
                                                                                  } ?>>Student</option>
                                                                            <option Value="accountant" <?php if($row['user_role']=="accountant"){
                                                                                   echo "selected";
                                                                                  } ?>>Accountant</option>
                                                                            <option Value="coordinator" <?php if($row['user_role']=="coordinator"){
                                                                                   echo "selected";
                                                                                  } ?>>Coordinator</option>
                                                                            <option Value="exams_controller" <?php if($row['user_role']=="exams_controller"){
                                                                                   echo "selected";
                                                                                  } ?>>Exams Controller</option>
                                                                            <option Value="QEC" <?php if($row['user_role']=="QEC"){
                                                                                   echo "selected";
                                                                                  } ?>>QEC</option>
                                                                            <option Value="principal/registrar" <?php if($row['user_role']=="principal/registrar"){
                                                                                   echo "selected";
                                                                                  } ?>>Principal/ Registrar</option>
                                                                            <option Value="jradmin" <?php if($row['user_role']=="jradmin"){
                                                                                   echo "selected";
                                                                                  } ?>>junior Admin</option>
                                                                            <option Value="DEAN/HOD" <?php if($row['user_role']=="DEAN/HOD"){
                                                                                   echo "selected";
                                                                                  } ?>>DEAN/ HOD</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Stream</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Stream" disabled>
                                                                     
                                                                                        <?php
                                                                                $sql = "SELECT * FROM `education_stream`";
                                                                            $result = $conn->query($sql);
                                                                            
                                                                            if ($result->num_rows > 0) {
                                                                              while($row1 = $result->fetch_assoc()) {
                                                                              
                                                                              ?>
                                                                              
                                                                          <option value="<?= $row1['stream_id']?>"><?= $row1['stream_name']?></option>
                                                                              
                                                                              
                                                                              <?php
                                                                              }
                                                                              
                                                                              
                                                                              
                                                                              ?>
                                                                               <input class="form-control" type="hidden" name="Stream" id="example-text-input" value="<?= $row['stream_id'] ?>">
                                                                              
                                                                              <?php
                                                                            } else {
                                                                              echo "0 results";
                                                                            }
                                                                       
                                                                                
                                                                                
                                                                                ?> 

                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Institute</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Institute" disabled>
                                                                           
                                                                                                                               
                                                                                    <?php
                                                                                $sql = "SELECT * FROM `education_institute`";
                                                                            $result = $conn->query($sql);
                                                                            
                                                                            if ($result->num_rows > 0) {
                                                                              while($row1 = $result->fetch_assoc()) {
                                                                              
                                                                              ?>
                                                                              
                                                                          <option value="<?= $row1['institute_id']?>" ><?= $row1['institute_name']?></option>
                                                                              
                                                                              
                                                                              
                                                                              <?php
                                                                              }
                                                                               
                                                                              ?>
                                                                               <input class="form-control" type="hidden" name="Institute" id="example-text-input" value="<?= $row['institute_id'] ?>">
                                                                              
                                                                              <?php
                                                                            } else {
                                                                              echo "0 results";
                                                                            }
                                                                        
                                                                                
                                                                                
                                            ?>   
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                 
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Mobile Number</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="number" name="mobile_number" id="example-text-input" value="<?= $row['mobile_number'] ?>">
                                                                    </div>
                                                                </div>
        
        
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Landline</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="number" name="landline" id="example-text-input" value="<?= $row['landline'] ?>">
                                                                    </div>
                                                                </div>            
        
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">CNIC</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="number" name="cnic" id="example-text-input" value="<?= $row['cnic'] ?>">
                                                                    </div>
                                                                </div> 
        
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Address</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="text" name="address" id="example-text-input" value="<?= $row['address'] ?>">
                                                                    </div>
                                                                </div>
        
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="password" name="password" id="example-text-input" value="<?= $row['user_password'] ?>">
                                                                    </div>
                                                                </div> 
        
        
        
                                                  
                                                    </div>
                                                </div>   
                                                         
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Update changes</button>
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

                                     

                                        <!-- sample modal content -->
                                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add User </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                               
                                                    
                                                    
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