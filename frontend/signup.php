<?php
include '../backend/config.php';
include 'header.php';
?>

 
        <div class="row vh-100">
            <div class="col-lg-7  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="index.html" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="55" alt="logo" class="my-3"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-0 mb-1">Free Register for Frogetor</h4>
                                    <p class="text-muted mb-0">Get your free Frogetor account now.</p>
                                </div>
                            </div>                            
                            
                               <form method="POST" action="../backend/adduser.php" id="my_form">
    
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
                                                           
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                           <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-3 col-form-label text-left">User Email</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="email" name="User_Email" id="example-text-input" placeholder="Alex@gmail.com..." required>
                                                            </div>
                                                        </div> 
                                                        <input class="form-control" type="hidden" name="User_Role" id="example-text-input" value="student" placeholder="Alex@gmail.com..." required>
                                                       
                                                        
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

    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">
                                                <span class="font-13 text-muted mb-0">By registering you agree to the Frogetor <a href="#">Terms of Use</a></span>
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="signup">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>

                        </div>
                        
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="">Already have an account ? </h5>
                            <p class="font-13">Login Frogetor Now</p>
                            <a href="login.php" class="btn btn-primary btn-round waves-effect waves-light px-3">Log in</a>                
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-white text-center">
                        <img src="../assets/images/logo-sm.png" alt="" class="thumb-sm">
                        <h4 class="mt-3">Welcome To Frogetor</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                        <p class="font-14 mt-3">Already have an account ? <a href="" class="text-primary">Login</a></p>
                       
                    </div>
                </div>
            </div>
        </div>
    

      