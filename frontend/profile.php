<?php 
session_start();
include '../backend/config.php';
include 'header.php';?>
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
                            </h6>u
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
      
          <?php
          $uid = $_GET['uid'];
                                            $sql = "SELECT * FROM user INNER JOIN education_stream ON user.stream_id = education_stream.stream_id INNER JOIN education_institute ON user.institute_id = education_institute.institute_id WHERE user.user_id='$uid'";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                         $row = $result->fetch_assoc();
                                          
                                          ?>
      
      <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <div class="fro_profile-main">
                                                        <div class="fro_profile-main-pic">
                                                            <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>
                                                        <div class="fro_profile_user-detail">
                                                            <h5 class="fro_user-name"><?= $row['name']?></h5>
                                                            <p class="mb-0 fro_user-name-post"><?= $row['user_role']?></p>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                           
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <div class="seling-report">
                                                                <ul class="list-inline mt-4">
                                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-success mr-2"></i><?= $row['stream_name']?></li>
                                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-danger mr-2"></i><?= $row['institute_name']?></li>
                                         
                                                                </ul>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="180"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                                <div class="col-lg-4 mb-2 mb-lg-0">
                                                    <div class="header-title">Revenue Report</div>                                                    
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="seling-report">
                                                                <h3 class="seling-data mb-1">$2353</h3>
                                                                <p class="text-muted">Today's Revenue</p>
                                                                <h5 class="seling-data-detail">Total Payment Clear</h5>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#44a2d2", "#e6edf3"]}' data-width="100%" data-height="100">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8</span>
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                                    <div class="card-body">
                                        <div class="wrap">
                                            <div class="jctkr-label">
                                                <strong>Latest News</strong>
                                            </div>
                                            <div class="js-conveyor-example">
                                                <ul>
                                                    <li>
                                                        <img src="../assets/images/products/img-4.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Purse</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="../assets/images/products/img-5.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Shoes</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="../assets/images/products/img-3.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Head Phone</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="../assets/images/products/img-2.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Watch</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="../assets/images/products/img-1.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Bag</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="../assets/images/products/img-6.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Vallyboll</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

      <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">My Courses</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Notification</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">
                                                Results 
                                                <span class="badge badge-warning">8</span>
                                            </a>
                                           </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                             

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-3">Contact</h4>   
                                        <ul class="list-unstyled mb-0">
                                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> Mobile </b> : <?= $row['mobile_number']?></li>
                                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> Landline </b> : <?= $row['landline']?></li>
                                            <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b> Email </b> : <?= $row['user_email']?></li>
                                            <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>Location</b> : <?= $row['address']?></li>
                                        </ul>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                
                                   <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-3">Personal Info</h4>   
                                        <ul class="list-unstyled mb-0">
                                            <li class=""><b> Father Name: </b> : <?= $row['father_name']?></li>
                                            <li class="mt-2"><b> Gender </b> : <?= $row['gender']?></li>
                                            <li class="mt-2"><b> DOB </b> : <?= $row['dob']?></li>
                                            <li class="mt-2"> <b>Religion</b> : <?= $row['religion']?></li>
                                            <li class="mt-2"> <b>Marital Status</b> : <?= $row['marital_status']?></li>
                                            <li class="mt-2"> <b>Blood Group</b> : <?= $row['blood_group']?></li>
                                            <li class="mt-2"> <b>Cnic</b> : <?= $row['cnic']?></li>
                                        </ul>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <h4 class="header-title mt-0">My Courses</h4>                                         
                                           
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none  overflow-hidden">
                                                            <div class="card-body bg-gradient2">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="fas fa-coins"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">$85750.00</h2>
                                                                    <p class="text-white mb-0 font-16">Total payments</p>                                            
                                                                </div>
                                                            </div>
                                                       
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none overflow-hidden">
                                                            <div class="card-body bg-gradient1">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="far fa-user"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">10</h2>
                                                                    <p class="text-white mb-0 font-16">Top 10 Best Saler This Month</p>                                            
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div><!--end col-->
                                                     <div class="col-lg-6">
                                                        <div class="card shadow-none  overflow-hidden">
                                                            <div class="card-body bg-gradient2">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="fas fa-coins"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">$85750.00</h2>
                                                                    <p class="text-white mb-0 font-16">Total payments</p>                                            
                                                                </div>
                                                            </div>
                                                      
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none overflow-hidden">
                                                            <div class="card-body bg-gradient1">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="far fa-user"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">10</h2>
                                                                    <p class="text-white mb-0 font-16">Top 10 Best Saler This Month</p>                                            
                                                                </div>
                                                            </div><!--end card-body-->
                                                            </div><!--end card-->
                                                    </div><!--end col-->
                                                </div><!--end row-->                                                
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="mt-0 header-title mb-3">Activity</h4>
                                                <div class="activity">
                                                    <i class="mdi mdi-check text-primary"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="../assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-alert-outline text-danger"></i>    
                                                    <div class="time-item ">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">50 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="../assets/images/users/user-6.jpg" alt="" class="img-activity">
                                                    <div class="time-item ">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">1 Day ago</div>
                                                            <h5 class="my-0">New Comment</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                            <img src="../assets/images/products/img-4.png" alt="" class="thumb-sm rounded">
                                                            <img src="../assets/images/products/img-5.png" alt="" class="thumb-sm rounded">
                                                        </div>
                                                    </div>
                                                    <img src="../assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                                                
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">3 Day ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-comment-outline text-info"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="../assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                            <img src="../assets/images/products/img-2.png" alt="" class="thumb-sm rounded">
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-check text-primary"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="../assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>                                                            
                                                        </div>
                                                    </div>                                                                
                                                </div> <!--end activity-->

                                                <div class="activity-meeting">
                                                    <div class="meeting-title">
                                                        <p class="text-muted mb-0 float-right"><i class="mdi mdi-calendar mr-1"></i>14 Feb 2019</p>
                                                        <h4 class="header-title mb-3">Meeting With Managers</h4>
                                                        <div class="card-body bg-light">
                                                            <ul class=" mb-0">
                                                                <li>There are many variations of passages of Lorem Ipsum available</li>
                                                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text. </li>
                                                                <li>Various versions have evolved over the years, sometimes by accident.</li>
                                                                <li>This book is a treatise on the theory of ethics, very popular during the Renaissance. </li>
                                                            </ul>
                                                        </div><!--end card-body-->
                                                    </div>
                                                </div>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <h4 class="mt-0 header-title mb-3">Stock Products</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-hover mb-0">
                                                        <thead>
                                                            <tr class="align-self-center">
                                                                <th>No</th>
                                                                <th>Product Name</th>
                                                                <th>Company</th>                                                                
                                                                <th>Sku</th>
                                                                <th>Color</th>
                                                                <th>Size</th>
                                                                <th>Pics</th>
                                                                <th>Rating</th>                                                                                    
                                                            </tr><!--end tr-->
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><img src="../assets/images/products/img-2.png" alt="" class="thumb-sm rounded-circle mr-2">Watch</td>
                                                                <td>Rado</td>
                                                                <td>F500</td>
                                                                <td>White, <del>Blue</del></td>
                                                                <td>3,<del>4</del>,5</td>
                                                                <td>55</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                                                        
                                                            </tr><!--end tr-->
                                                            <tr>
                                                                <td>2</td>
                                                                <td><img src="../assets/images/products/img-4.png" alt="" class="thumb-sm rounded-circle mr-2">Purse</td>
                                                                <td>Lavie</td>
                                                                <td>P500</td>
                                                                <td>Green,Blue <del>Red</del></td>
                                                                <td>Medium ,<del>Long</del></td>
                                                                <td>14</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                            
                                                            <tr>
                                                                <td>3</td>
                                                                <td><img src="../assets/images/products/img-5.png" alt="" class="thumb-sm rounded-circle mr-2">Shoes</td>
                                                                <td>Reebok</td>
                                                                <td>R400</td>
                                                                <td>White,Gray <del>Red</del></td>
                                                                <td>5 to 10 <del>11, 12</del></td>
                                                                <td>10</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                            
                                                            <tr>
                                                                <td>4</td>
                                                                <td><img src="../assets/images/products/img-3.png" alt="" class="thumb-sm rounded-circle mr-2">Headphone</td>
                                                                <td>MI</td>
                                                                <td>Mi450</td>
                                                                <td>Black, Blue <del>white</del></td>
                                                                <td>-</td>
                                                                <td>4</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                        </tbody><!--end tbody-->
                                                    </table><!--end table-->
                                                </div><!--end table-responsive-->
                                                <div class="pt-3 border-top text-right">
                                                    <a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a>
                                                </div> 

                                                <div class="new-product mt-5">
                                                    <h4 class="mt-0 header-title">Coming Soon Products</h4>
                                                    <p class="text-muted">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form, by injected. </p>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="../assets/images/products/img-1.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Nike Bag</h4>
                                                                    <small class="text-muted">New Modal Nike Bag</small>
                                                                    <h6>MRP: $99.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="../assets/images/products/img-5.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Nike Shoes</h4>
                                                                    <small class="text-muted">PU Leather Pasted 20</small>
                                                                    <h6>MRP: $12.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="../assets/images/products/img-3.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Headphone F2019</h4>
                                                                    <small class="text-muted">Wired Connectivity</small>
                                                                    <h6>MRP: $199.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end new-product-->
                                            </div><!--end tab-pen-->

                                           
                                        </div>  <!--end tab-content-->                                                                              
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
             <?php
                                       
                                        } else {
                                          echo "0 results";
                                        }
                                     
                                            
                                            ?>                
                        
                        
                        
</div><!-- container -->

                                     

                                        <!-- sample modal content -->
                                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add User </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                                    <form method="POST" action="../backend/adduser.php">
                                                    <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Full Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Full_Name" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Father Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="Father_Name" id="example-text-input">
                                                            </div>
                                                        </div>
                                                  <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label text-right">Gender</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="Gender">
                                                                            <option>Select</option>
                                                                            <option Value="MALE" >MALE</option>
                                                                            <option Value="FEMALE" >FEMALE</option>
                                                                            <option Value="OTHER" >OTHER</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        <div class="form-group row">
                                                            <label for="example-date-input" class="col-sm-2 col-form-label text-right">DOB</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="date" name="date_of_birth" id="example-date-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Religion</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Religion">
                                                                    <option>Select</option>
                                                                    <option Value="ISLAM">Islam</option>
                                                                    <option Value="CHRISTIAN">Christian</option>
                                                                    <option Value="HINDU">Hindu</option>
                                                                    <option Value="SIKHISM">Sikkism</option>
                                                                    <option Value="OTHER">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Marital Status</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Marital_Status">
                                                                    <option>Select</option>
                                                                    <option Value="SINGLE">Single</option>
                                                                    <option Value="MARRIED">Married</option>
                                                                    <option Value="DIVORCED">Divorced</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Blood Group</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Blood_Group">
                                                                    <option>Select</option>
                                                                    <option Value="A+">A+</option>
                                                                    <option Value="A-">A-</option>
                                                                    <option Value="B+">B+</option>
                                                                    <option Value="B-">B-</option>
                                                                    <option Value="O+">O+</option>
                                                                    <option Value="O-">O-</option>
                                                                    <option Value="AB+">AB+</option>
                                                                    <option Value="AB-">AB-</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">User Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="User_Name" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">User Email</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="email" name="User_Email" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">User Role</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="User_Role">
                                                                    <option>Select</option>
                                                                    <option Value="superadmin">Super Admin</option>
                                                                    <option Value="admin">Admin</option>
                                                                    <option Value="teacher/trainer">Teacher/ Trainer</option>
                                                                    <option Value="asstantteacher/facilitator">Assitant Teacher/ Facilitator</option>
                                                                    <option Value="parent">Parent</option>
                                                                    <option Value="student">Student</option>
                                                                    <option Value="accountant">Accountant</option>
                                                                    <option Value="coordinator">Coordinator</option>
                                                                    <option Value="exams_controller">Exams Controller</option>
                                                                    <option Value="QEC">QEC</option>
                                                                    <option Value="principal/registrar">Principal/ Registrar</option>
                                                                    <option Value="jradmin">junior Admin</option>
                                                                    <option Value="DEAN/HOD">DEAN/ HOD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Stream</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="stream">
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
                                                            <label class="col-sm-2 col-form-label text-right">Institute</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="Institute">
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
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Mobile Number</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="number" name="mobile_number" id="example-text-input">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Landline</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="number" name="landline" id="example-text-input">
                                                            </div>
                                                        </div>            

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">CNIC</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="number" name="cnic" id="example-text-input">
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Address</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="address" id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Password</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="password" name="password" id="example-text-input">
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
        
        
        
                <!-- jQuery  -->
 

        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="../assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="../assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="../assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="../assets/plugins/chartjs/chart.min.js"></script>
        <script src="../assets/pages/jquery.profile.init.js"></script>

     
        

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>