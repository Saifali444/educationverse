<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $Education_stream = $_POST['Education_stream'];
	 $Program_Name = $_POST['Program_Name'];
	 $Program_Duration = $_POST['Program_Duration'];
	 $Program_Code = $_POST['Program_Code'];
	 $Education_institute = $_POST['Education_institute'];
	 $Program_Fee = $_POST['Program_Fee'];
	 $Program_status = $_POST['Program_status'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `program`(`stream_id`, `institute_id`, `program_name`, `program_duration`, `program_code`, `program_fees`, `program_status`, `create_date`, `update_date`) 
	 VALUES ('$Education_stream','$Education_institute','$Program_Name','$Program_Duration','$Program_Code','$Program_Fee','$Program_status','$current_date_time','NULL')";
// 	var_dump($sql);
// 	die();

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addprogram_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/program.php','_self');
                    </script>";
	 } else {
		$_SESSION['addprogram_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/program.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>