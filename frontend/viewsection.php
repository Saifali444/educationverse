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
                                  <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Add Material</button>
                                           <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Update Section</button>
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
           
                                        <h4 class="mt-0 header-title">Section Info </h4>
                                                    <?php
                                                    $sid = $_GET['sid'];
                                            $sql = "SELECT * FROM `section` INNER JOIN education_stream ON section.stream_id=education_stream.stream_id INNER JOIN education_institute ON section.institute_id = education_institute.institute_id INNER JOIN program ON section.program_id = program.program_id INNER JOIN program_components ON section.component_id = program_components.components_id INNER JOIN user ON section.teacher_assign = user.user_id INNER JOIN subject ON section.subject_id = subject.subject_id WHERE `section_id`='$sid'";
                                    
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
                                                          <h4>Section Name:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['section_name']?></h4>
                                                      </div>
                                                       <div class="col-md-3">
                                                          <h4>Teacher:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['name']?></h4>
                                                      </div>
                                                      
                                                  </div>
                                                      <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Stream:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['stream_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Institute Name:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['institute_name']?></h4>
                                                      </div>
                                                     
                                                      
                                                  </div>
                                                  
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Program:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['program_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Component :</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['component_name']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                    
                                                 
                                                  
                                                  
                                                   <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Teacher Assistant 1:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Teacher Assistant 2:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['name']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                     
                                                  
                                                      <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Start Time:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_start_time']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>End Time</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_end_time']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                  
                                                  
                                                   <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Monday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_MONDAY']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Tuesday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_TUESDAY']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                    <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Wednesday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_WEDNESDAY']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Thursday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_THURSDAY']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                    <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Friday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_FRIDAY']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Saturday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_SATURDAY']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                  
                                                 
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Subject:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['subject_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Video Url :</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['videos']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Sunday:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row['lecture_day_SUNDAY']?></h4>
                                                      </div>
                                                      <!--<div class="col-md-3">-->
                                                      <!--    <h4>Saturday:</h4>-->
                                                      <!--</div>-->
                                                      <!--  <div class="col-md-3">-->
                                                      <!--    <h4></h4>-->
                                                      <!--</div>-->
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                  
                                                       <div class="row">
                                                    
                                                      
                                                        <div class="col-md-3">
                                                          <h4>Institute Create Date:</h4>
                                                      </div>
                                                            <div class="col-md-3">
                                                          <h4>
                                                          <?php 
                                                $Date = $row['create_date'];
                                                $date1 = explode(" ",$Date);
                                                $datesep = explode("-",$date1[0]);
                                                echo $datesep[2]."/".$datesep[1]."/".$datesep[0];
                                            
                                                
                                                ?>
                                                          </h4>
                                                      </div>
                                                      
                                                       <div class="col-md-3">
                                                          <h4>Institute Update Date:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                          
                                                          <h4>
                                                          <?php 
                                                $Date = $row['update_date'];
                                                $date1 = explode(" ",$Date);
                                                $datesep = explode("-",$date1[0]);
                                                echo $datesep[2]."/".$datesep[1]."/".$datesep[0];
                                            
                                                
                                                ?></h4>
                                                      </div>
                                                      </div>
                                                      
                                                     
                                                      
                                                      
                                                  </div>
                                                  
                                                  
                                            
                                          
                                              <?php
                                       
                                        } else {
                                            
                                            
                                            
                                                      
                                                    $sid1 = $_GET['sid'];
                                            $sql1 = "SELECT * FROM `section` INNER JOIN education_stream ON section.stream_id=education_stream.stream_id INNER JOIN education_institute ON section.institute_id = education_institute.institute_id INNER JOIN program ON section.program_id = program.program_id INNER JOIN program_components ON section.component_id = program_components.components_id INNER JOIN user ON section.teacher_assign = user.user_id WHERE `section_id`='$sid1'";
                                        
                                        $result1 = $conn->query($sql1);
                                        
                                        if ($result1->num_rows > 0) {
                                            $counter1=0;
                                          $row1 = $result1->fetch_assoc();
                                          $counter1 = $counter1 + 1;
                                          
                                          $stream_id1 = $row1['stream_id'];
                                          $institute_id1 = $row1['institute_id'];
                                          $program_id1 = $_GET1['pid']
                                          ?>
                                                  
                                                  <div class="row">
                                                      <div class="col-md-3">
                                                          <h4>Section Name:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['section_name']?></h4>
                                                      </div>
                                                       <div class="col-md-3">
                                                          <h4>Teacher:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['name']?></h4>
                                                      </div>
                                                      
                                                  </div>
                                                      <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Stream:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['stream_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Institute Name:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['institute_name']?></h4>
                                                      </div>
                                                     
                                                      
                                                  </div>
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                          <h4>Program:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['program_name']?></h4>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <h4>Component :</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                                          <h4><?= $row1['component_name']?></h4>
                                                      </div>
                                                      
                                                     
                                                      
                                                  </div>
                                                  
                                                       <div class="row">
                                                    
                                                      
                                                        <div class="col-md-3">
                                                          <h4>Institute Create Date:</h4>
                                                      </div>
                                                            <div class="col-md-3">
                                                          <h4>
                                                          <?php 
                                                $Date = $row1['create_date'];
                                                $date1 = explode(" ",$Date);
                                                $datesep = explode("-",$date1[0]);
                                                echo $datesep[2]."/".$datesep[1]."/".$datesep[0];
                                            
                                                
                                                ?>
                                                          </h4>
                                                      </div>
                                                      
                                                       <div class="col-md-3">
                                                          <h4>Institute Update Date:</h4>
                                                      </div>
                                                        <div class="col-md-3">
                                          
                                                          <h4>
                                                          <?php 
                                                $Date = $row1['update_date'];
                                                $date1 = explode(" ",$Date);
                                                $datesep = explode("-",$date1[0]);
                                                echo $datesep[2]."/".$datesep[1]."/".$datesep[0];
                                            
                                                
                                                ?></h4>
                                                      </div>
                                                      </div>
                                                      
                                                  </div>
                                                  
                                                  
                                            
                                          
                                              <?php
                                       
                                        } else {
                                            
                                            
                                            
                                          echo "02222 results";
                                        
                                            
                                            
                                            
                                            
                                        }
                                      
                                            
                                            
                                            
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
           
                                        <h4 class="mt-0 header-title">Section Material</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sr.#</th>
                                                <th>View Material</th>
                                                <th>Material Type</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                      <?php
                                                      
                                                $sid = $_GET['sid'];
                                                $sql = "SELECT * from `section` INNER JOIN `Material` ON section.section_id=Material.section_id WHERE Material.section_id ='$sid'";
                                                $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $counter=0;
                                          while($row = $result->fetch_assoc()) {
                                          $counter = $counter + 1;
                                          
                                          ?>
                                            <tr>
                                                <td><?= $counter?></td>
                                                <td><a href="../backend/image/<?= $row['Material_name']?>"><?= $row['Material_name']?></a></td>
                                                <td><?= $row['Material_type']?></td>
                                                <td>
                                                        <div class="dropdown d-inline-block float-right">
                                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                               
                                                                <a class="dropdown-item" href="../backend/deletematerial.php?mid=<?= $row['material_id']?>&sid=<?= $sid?>">Delete</a>
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

             <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="exampleModalLabel">ADD Material</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                      <form method="POST" action="../backend/add_material.php" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                                 <div class="row">                               
                                                                    
                                                                              <div class="col-lg-12">
                                                         
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-right">Select Type</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="materail_type">
                                                                    <option>Select</option>
                                                                    
                                                                     
                                                                          
                                                                      <option Value="Note">Note </option>
                                                                      <option Value="Assignment">Assignment</option>
                                                                      <option Value="Quiz">Quiz</option>
                                                                      <option Value="ModalPaper">Modal Paper</option>
                                                                      <option Value="PastPaper">Past Paper</option>
                                                                      <option Value="MidTermPaper">Mid Term Paper</option>
                                                                      <option Value="FinalPaper">Final Paper</option>
                                                                          
                                                                          
                                                                          
                                                                       
                                                                            
                                                                                             
                                                                 
                                                                 
                                                                 
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        </div>
                                                          <div class="col-lg-12">
                                                        
                                                                                     <div class="form-group row">
                                                                                        <label for="example-time-input" class="col-sm-2 col-form-label text-right">File Upload</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input class="form-control" type="file" name="material" id="example-time-input">
                                                                                        </div>
                                                                                       </div>
                                                                        </div>
                                                        </div>  <input class="form-control" type="hidden" name="sid" value="<?= $_GET['sid'];?>" id="example-time-input">
                                                        
                                                        <div class="float-right align-item-center mt-2">
                                                 <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    
                                                </div>
                                                        
                                                       
                                                        
                                                    </div>
                                                </div><!-- /.modal-content -->
                                                  <!--<div class="modal-footer">-->
                                                  <!--      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>-->
                                                  <!--      <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Save changes</button>-->
                                                  <!--  </div>-->
                                                   </form> 
                                                
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                     
   <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Update Section </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                      
                                                    
                                                    
                                                    <form method="POST" action="../backend/updatesectionupdate.php" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                    <div class="row">
                                                                      <?php
                                                                         $sid2 = $_GET['sid'];
                                                                            $sql44 = "SELECT * FROM `section` INNER JOIN subject ON section.subject_id = subject.subject_id INNER JOIN user ON section.teacher_asst_1 = user.user_id WHERE section.section_id ='$sid2'";
                                                            
                                                                       
                                                                        $result44 = $conn->query($sql44);
                                                                       
                                                                        if ($result44->num_rows > 0) {
                                                                           $row44 = $result44->fetch_assoc();
                                                                           
                                                                           if(isset($row44['subject_id'])){
                                                                              ?>
                                                                                            <div class="col-lg-6">
                                                                     
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Select Subject</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Education_Subject">
                                                                                <option>Select</option>
                                                                                
                                                                                     <?php
                                                                                        $sql = "SELECT * FROM `subject`";
                                                                                    $result = $conn->query($sql);
                                                                                    
                                                                                    if ($result->num_rows > 0) {
                                                                                      while($row = $result->fetch_assoc()) {
                                                                                      
                                                                                      ?>
                                                                                      
                                                                                  <option Value="<?= $row['subject_id']?>" <?php if($row44['subject_name']==$row['subject_name']){
                                                                                               echo "selected";
                                                                                              } ?>><?= $row['subject_name']?></option>
                                                                                      
                                                                                      
                                                                                      
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
                                                                        <label class="col-sm-2 col-form-label text-right">Teacher Assistant 2</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="T_Assistant2">
                                                                                <option>Select</option>
                                                                                
                                                                                     <?php
                                                                                        $sql = "SELECT * FROM `user`";
                                                                                    $result = $conn->query($sql);
                                                                                    
                                                                                    if ($result->num_rows > 0) {
                                                                                      while($row = $result->fetch_assoc()) {
                                                                                      
                                                                                      ?>
                                                                                      
                                                                                  <option Value="<?= $row['user_id']?>" <?php if($row44['name']==$row['name']){
                                                                                               echo "selected";
                                                                                              } ?> ><?= $row['name']?></option>
                                                                                      
                                                                                      
                                                                                      
                                                                                      <?php
                                                                                      }
                                                                                    } else {
                                                                                      echo "0 results";
                                                                                    }
                                                                                
                                                                                        
                                                                                        
                                                                                        ?>   
                                                                                                              
                                                                             
                                                                             
                                                                             
                                                                             
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                      <input class="form-control" type="hidden" name="section_id" value="<?= $sid ?>" id="example-text-input">
                                                                   
                                                                    
                                                     
                                                                 <div class="form-group row">
                                                                        <label for="example-time-input" class="col-sm-2 col-form-label text-right">Start Time </label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" type="time" name="Start_Time" value="<?= $row44['lecture_start_time']; ?>" id="example-time-input">
                                                                        </div>
                                                                       </div>
                                                                       
                                                                           <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Tuesday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Tuesday">
                                                                                <option>Select</option>
                                                                                
                                                                                                                       
                                                                                  <option Value="YES" <?php if($row44['lecture_day_TUESDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="NO" <?php if($row44['lecture_day_TUESDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>No</option>
                                                                                     
                                                                                                              
                                                                             
                                                                             
                                                                             
                                                                             
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Thursday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Thursday">
                                                                                <option>Select</option>    
                                                                                  <option Value="YES" <?php if($row44['lecture_day_THURSDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="NO" <?php if($row44['lecture_day_THURSDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Saturday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Saturday">
                                                                                <option>Select</option>            
                                                                                  <option Value="YES" <?php if($row44['lecture_day_SATURDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="NO" <?php if($row44['lecture_day_SATURDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                     
                                                     
                                                     
                                                        
                                                                  
                                       
                                      
                                      
                                                        </div>
                                                                                            <div class="col-lg-6">
                                                              <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Teacher Assistant 1</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="T_Assistant1">
                                                                                <option>Select</option>
                                                                                
                                                                                                                                                                      <?php
                                                                                        $sql = "SELECT * FROM `user`";
                                                                                    $result = $conn->query($sql);
                                                                                    
                                                                                    if ($result->num_rows > 0) {
                                                                                      while($row = $result->fetch_assoc()) {
                                                                                      
                                                                                      ?>
                                                                                      
                                                                                     <option Value="<?= $row['user_id']?>" <?php if($row44['name']==$row['name']){
                                                                                               echo "selected";
                                                                                              } ?> ><?= $row['name']?></option>
                                                                                      
                                                                                      
                                                                                      
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
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Video Url</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" type="url" name="video_url"  value="<?= $row44['videos']; ?>" id="example-text-input">
                                                                        </div>
                                                                   
                                                                     </div>
                                                                     
                                                                     
                                                                     
                                                                     
                                                                         <div class="form-group row">
                                                                <label for="example-time-input" class="col-sm-2 col-form-label text-right">End Time </label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="time" name="End_time" value="<?= $row44['lecture_end_time']; ?>" id="example-time-input">
                                                                </div>
                                                               </div>
                                                            
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Monday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Monday">
                                                                                <option>Select</option>      
                                                                                  <option Value="YES" <?php if($row44['lecture_day_MONDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="NO" <?php if($row44['lecture_day_MONDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>NO</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Wednesday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Wednesday">
                                                                                <option>Select</option>      
                                                                                  <option Value="YES" <?php if($row44['lecture_day_WEDNESDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="NO" <?php if($row44['lecture_day_WEDNESDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>NO</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Friday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Friday">
                                                                                <option>Select</option>           
                                                                                  <option Value="YES" <?php if($row44['lecture_day_FRIDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="No" <?php if($row44['lecture_day_FRIDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Sunday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Sunday">
                                                                                <option>Select</option>           
                                                                                  <option Value="YES" <?php if($row44['lecture_day_SUNDAY']=="YES"){
                                                                                               echo "selected";
                                                                                              } ?>>Yes</option>
                                                                                  <option Value="No" <?php if($row44['lecture_day_SUNDAY']=="NO"){
                                                                                               echo "selected";
                                                                                              } ?>>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                  
                                                        </div>
                                                                              
                                                                              <?php
                                                                           }
                                                                               
                                                                           }else{
                                                                           ?>
                                                                            
                                                                                 <div class="col-lg-6">
                                                                     
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Select Subject</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Education_Subject">
                                                                                <option>Select</option>
                                                                                
                                                                                     <?php
                                                                                        $sql = "SELECT * FROM `subject`";
                                                                                    $result = $conn->query($sql);
                                                                                    
                                                                                    if ($result->num_rows > 0) {
                                                                                      while($row = $result->fetch_assoc()) {
                                                                                      
                                                                                      ?>
                                                                                      
                                                                                  <option Value="<?= $row['subject_id']?>"><?= $row['subject_name']?></option>
                                                                                      
                                                                                      
                                                                                      
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
                                                                        <label class="col-sm-2 col-form-label text-right">Teacher Assistant 2</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="T_Assistant2">
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
                                                                    
                                                                      <input class="form-control" type="hidden" name="section_id" value="<?= $sid ?>" id="example-text-input">
                                                                   
                                                                    
                                                     
                                                                 <div class="form-group row">
                                                                        <label for="example-time-input" class="col-sm-2 col-form-label text-right">Start Time </label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" type="time" name="Start_Time" id="example-time-input">
                                                                        </div>
                                                                       </div>
                                                                       
                                                                           <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Tuesday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Tuesday">
                                                                                <option>Select</option>
                                                                                
                                                                                                                       
                                                                                  <option Value="YES" >Yes</option>
                                                                                  <option Value="NO" >No</option>
                                                                                     
                                                                                                              
                                                                             
                                                                             
                                                                             
                                                                             
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Thursday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Thursday">
                                                                                <option>Select</option>    
                                                                                  <option Value="YES" >Yes</option>
                                                                                  <option Value="No" >No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Saturday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Saturday">
                                                                                <option>Select</option>            
                                                                                  <option Value="YES" >Yes</option>
                                                                                  <option Value="No" >No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                     
                                                     
                                                     
                                                        
                                                                  
                                       
                                      
                                      
                                                        </div>
                                                                                          <div class="col-lg-6">
                                                              <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Teacher Assistant 1</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="T_Assistant1">
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
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Video Url</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" type="url" name="video_url" id="example-text-input">
                                                                        </div>
                                                                   
                                                                     </div>
                                                                     
                                                                     
                                                                     
                                                                     
                                                                         <div class="form-group row">
                                                                <label for="example-time-input" class="col-sm-2 col-form-label text-right">End Time </label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="time" name="End_time" id="example-time-input">
                                                                </div>
                                                               </div>
                                                            
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Monday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Monday">
                                                                                <option>Select</option>      
                                                                                  <option Value="YES">Yes</option>
                                                                                  <option Value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Wednesday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Wednesday">
                                                                                <option>Select</option>      
                                                                                  <option Value="YES">Yes</option>
                                                                                  <option Value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Friday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Friday">
                                                                                <option>Select</option>           
                                                                                  <option Value="YES">Yes</option>
                                                                                  <option Value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                     <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label text-right">Sunday</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="Sunday">
                                                                                <option>Select</option>           
                                                                                  <option Value="YES">Yes</option>
                                                                                  <option Value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                  
                                                        </div>
                                                                            
                                                                            
                                                                            
                                                                               <?php
                                                                           
                                                                            }
                                                                          ?>   
                                                                     
                                                    
                                        </div>   
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Save changes</button>
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