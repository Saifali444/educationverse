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
                                
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Add User</button>
                            
                            

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
                                        
                                        
                                        
                                        <?php
                                            if(isset($_SESSION['adduser_success'])){
                                                ?>
                                                
                                                     <div class="alert alert-outline-success alert-success-shadow mb-0 alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong><?= $_SESSION['adduser_success']?>
                                                    </div> 
           
                                                
                                                
                                                
                                                
                                                <?php
                                            }unset($_SESSION['adduser_success']);
                                        
                                        ?>
                                        
                                        
                                                    <?php
                                            if(isset($_SESSION['adduser_unsuccess'])){
                                                ?>
                                                
                                                     <div class="alert alert-outline-success alert-success-shadow mb-0 alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong><?= $_SESSION['adduser_unsuccess']?>
                                                    </div> 
           
                                                
                                                
                                                
                                                
                                                <?php
                                            }unset($_SESSION['adduser_unsuccess']);
                                        
                                        ?>
                                        
                                        
                                     
                                        
                                        
                                        
                                        
                                        <h4 class="mt-0 header-title">USERS</h4>
                                        <!-- <p class="text-muted mb-4 font-13">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Stream</th>
                                                <th>Institue</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
                                            
                                            
                                             <?php
                                            $sql = "SELECT * FROM user INNER JOIN education_stream ON user.stream_id = education_stream.stream_id INNER JOIN education_institute ON user.institute_id = education_institute.institute_id";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                          
                                          ?>
                                          
                                          <tr>
                                                <td><?= $row['name']?></td>
                                                <td><?= $row['user_email']?></td> 
                                                <td><?= $row['user_role']?></td>
                                                <td><?= $row['stream_name']?></td>
                                                <td><?= $row['institute_name']?></td>
                                                <td><?= $row['mobile_number']?></td>
                                        
                                                <td>
                                                        <div class="dropdown d-inline-block float-right">
                                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                                <a class="dropdown-item" href="profile.php?uid=<?= $row['user_id']?>">View</a>
                                                                <a class="dropdown-item" href="updateuser.php?uid=<?= $row['user_id']?>">Update</a>
                                                                <a class="dropdown-item" href="../backend/deleteuser.php?uid=<?= $row['user_id']?>">Delete</a>
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
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Add User </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    
                                                    <form method="POST" action="../backend/adduser.php" id="my_form">
                                                    <div class="modal-body p-5">
                                                    <div class="row mr-auto">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-left">Full Name</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" name="Full_Name" id="example-text-input" placeholder="Alex Clark..." required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-left">Father Name</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" name="Father_Name" id="example-text-input" placeholder="Clark Kent..." required>
                                                            </div>
                                                        </div>
                                                  <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label text-left">Gender</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" name="Gender" id="gender" required>
                                                                            <option Value="">Select</option>
                                                                            <option Value="MALE" >Male</option>
                                                                            <option Value="FEMALE" >Female</option>
                                                                            <option Value="OTHER" >Other</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        <div class="form-group row">
                                                            <label for="example-date-input" class="col-sm-3 col-form-label text-left">DOB</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="date" name="date_of_birth" id="example-date-input" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-left">Religion</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="Religion" id="religion" required>
                                                                    <option Value="">Select</option>
                                                                    <option Value="ISLAM">Islam</option>
                                                                    <option Value="CHRISTIAN">Christian</option>
                                                                    <option Value="HINDU">Hindu</option>
                                                                    <option Value="SIKHISM">Sikkism</option>
                                                                    <option Value="OTHER">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-left">Marital Status</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="Marital_Status" id="marital_status" required>
                                                                    <option Value="">Select</option>
                                                                    <option Value="SINGLE">Single</option>
                                                                    <option Value="MARRIED">Married</option>
                                                                    <option Value="DIVORCED">Divorced</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-left">Blood Group</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="Blood_Group" id="blood_group" required>
                                                                    <option Value="">Select</option>
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
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-left">User Name</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" name="User_Name" id="example-text-input" placeholder="Alex123..." required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-left">User Email</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="email" name="User_Email" id="example-text-input" placeholder="Alex@gmail.com..." required>
                                                            </div>
                                                        </div>
                                                        
                          
                                            </div>


                                            <div class="col-lg-6">

                                                
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right">User Role</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="User_Role" id="user_role" required>
                                                                    <option Value="">Select</option>
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
                                                                    <option Value="jradmin">Junior Admin</option>
                                                                    <option Value="DEAN/HOD">Dean/ HOD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right">Stream</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="stream" id="stream" required>
                                                                    <option Value="">Select</option>
                                                                    
                                                               
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
                                                            <label class="col-sm-3 col-form-label text-right">Institute</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="Institute" id="institute" required>
                                                                    <option Value="">Select</option>
                                                                                                                         
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
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-right">Mobile Number</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="number" name="mobile_number" id="mobile_number" placeholder="923000000000" required>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-right">Landline</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="number" name="landline" id="land_line" placeholder="924200000000" required>
                                                            </div>
                                                        </div>            

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-right">CNIC</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="number" name="cnic" id="cnic" placeholder="3520000000001" required>
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-right">Address</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" name="address" id="example-text-input" placeholder="House 1 Block 1 Lhr, Pk..." required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-right">Password</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="password" name="password" id="password" placeholder="Abc1234567" required>
                                                            </div>
                                                        </div> 



                                          
                                            </div>
                                        </div>   
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Save</button>
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
        <script defer>
                document.getElementById('my_form').addEventListener('submit', (event) => {
                    let phnNumber = document.getElementById("mobile_number").value;
                    let cnic = document.getElementById("cnic").value;
                    let landLine = document.getElementById("land_line").value;
                    
                    let password = document.getElementById("password").value;
                    const passwordPattern = /^(?=.*[A-Z])(?=.*\d)/; 
                    if(password.length >= 8 && passwordPattern.test(password))
                    {
                        return true;
                    }
                    else
                    {
                        alert("Password must contain an Upper case letter and a Digit and minimun 8 characters")
                        event.preventDefault();
                    }
                    
                    
                    if(phnNumber.length === 12){
                        if(cnic.length === 13){
                            if(landLine.length === 12){
                                return true
                            }else{
                                alert("Enter Valid Land Line Number with 92")
                                event.preventDefault();
                            }
                        }else{
                            alert("Enter Valid CNIC")
                            event.preventDefault();
                        }
                    }else{
                        alert("Enter Valid Phone Number with 92")
                         event.preventDefault();
                    }
                     
                    
            });
        </script>
    

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