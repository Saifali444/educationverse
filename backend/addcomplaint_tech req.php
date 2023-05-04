<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Subject_id = $_POST['subject_id'];
	 $User_id = $_POST['user_id'];
	 $Details = $_POST['details'];
	 $Upload_file = $_POST['upload_file'];
	 $Type = $_POST['type'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `complaint/tech req`(`stream_id`, `institute_id`,
	 `subject_id`, `user_id`,
	 `details`, `upload_file`, `type`, `create_date`, `update_date`) 
	 VALUES ('$Stream_id','$Institute_id','$Subject_id','$User_id','$Details','$Upload_file','$Type','$current_date_time','NULL')";


	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addcomplaint/tech_req_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complainttech_req.php','_self');
                    </script>";
	 } else {
		$_SESSION['addcomplaint/tech_req_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complainttech_req.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>