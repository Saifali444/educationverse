<?php
session_start();
include 'config.php';
if(isset($_POST['save']) || isset($_POST['signup']) )
{
  
	 $Full_Name = $_POST['Full_Name'];
	 $Father_Name = $_POST['Father_Name'];
	 $Gender = $_POST['Gender'];
	 $date_of_birth = $_POST['date_of_birth'];
	 $Religion = $_POST['Religion'];
	 $Marital_Status = $_POST['Marital_Status'];
	 $Blood_Group = $_POST['Blood_Group'];
	 $User_Name = $_POST['User_Name'];
	 $User_Email = $_POST['User_Email'];
	 $Password = $_POST['password'];
	 $User_Role = $_POST['User_Role'];
	 $stream = $_POST['stream']; 
	 $Institute = $_POST['Institute'];
	 $mobile_number = $_POST['mobile_number'];
	 $landline = $_POST['landline'];
	 $cnic = $_POST['cnic'];
	 $address = $_POST['address'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `user`(`name`, `father_name`, `gender`, `dob`, `religion`, `marital_status`, `blood_group`, `user_name`, `user_email`, `user_password`, `user_role`, `stream_id`, `institute_id`, `mobile_number`, `landline`, `cnic`, `address`, `create_date`, `update_date`) VALUES ('$Full_Name','$Father_Name','$Gender','$date_of_birth','$Religion','$Marital_Status','$Blood_Group','$User_Name','$User_Email','$Password','$User_Role','$stream','$Institute','$mobile_number','$landline','$cnic','$address','$current_date_time','NULL')";

	 if (mysqli_query($conn, $sql)) {

		$_SESSION['adduser_success'] = 'New record created successfully !';
		
		
		
		if(isset($_POST['save'])){
		
                    echo "
                                <script>
                                    window.open('https://educationverse.org/frontend/users.php','_self');
                                </script>";
        }else{
            echo "
                                <script>
                                    window.open('https://educationverse.org/frontend/login.php','_self');
                                </script>";
        }
	 } else {
	     
	     	   

		$_SESSION['adduser_unsuccess'] = 'New record is not created !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
	 }
	 mysqli_close($conn);
}
?>