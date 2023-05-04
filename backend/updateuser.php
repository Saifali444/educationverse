<?php
session_start();
include 'config.php';

 

if(isset($_POST['update']))
{	  
     $user_id = $_POST['user_id'];
    
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
	 $stream = $_POST['Stream']; 
	 $Institute = $_POST['Institute'];
	 $mobile_number = $_POST['mobile_number'];
	 $landline = $_POST['landline'];
	 $cnic = $_POST['cnic'];
	 $address = $_POST['address'];
	 $current_date_time = date("Y-m-d H:i:s");

	 $sql = "UPDATE `user` SET `name`='$Full_Name',`father_name`='$Father_Name',`gender`='$Gender',`dob`='$date_of_birth',`religion`='$Religion',`marital_status`='$Marital_Status',`blood_group`='$Blood_Group',`user_name`='$User_Name',`user_email`='$User_Email',`user_password`='$Password',`user_role`='$User_Role',`stream_id`='$stream',`institute_id`='$Institute',`mobile_number`='$mobile_number',`landline`='$landline',`cnic`='$cnic',`address`=' $address',`update_date`='$current_date_time' WHERE `user_id` ='$user_id'";
	

            if ($conn->query($sql) === TRUE) {
              
              	$_SESSION['updateuser_success'] = 'Record updated successfully !';
            	    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
            } else {
                
              
              $_SESSION['updateuser_unsuccess'] = 'record is not updated !';
            		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
            }


$conn->close();
	
	
}
?>