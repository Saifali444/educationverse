<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $Education_stream = $_POST['Stream_id'];
	 $institute_id  = $_POST['Institute_id'];
	 $program_id  = $_POST['Program_id'];
	 $Component_name = $_POST['Component_name'];
	 $Component_code = $_POST['Component_code'];
	 $Component_fees = $_POST['Component_fees'];
	 $Component_type = $_POST['Component_type'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `program_components`(`stream_id`, `institute_id`, `program_id`, `component_name`, `component_code`, `component_fees`, `component_type`, `create_date`, `update_date`) VALUES ('$Education_stream','$institute_id','$program_id','$Component_name','$Component_code','$Component_fees','$Component_type','$current_date_time','NULL')";
	
	 if (mysqli_query($conn, $sql)) {
	
		$_SESSION['addprogramcomponent_success'] = 'New record created successfully !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/program.php','_self');
                    </script>";
	 } else {
		$_SESSION['addprogramcomponent_unsuccess'] = 'New record is not created !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
			header("Location: ../frontend/program.php");
	 }
	 mysqli_close($conn);
}
?>