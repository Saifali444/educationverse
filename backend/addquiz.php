<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $Education_stream = $_POST['Education_stream'];
	 $institute_id = $_POST['institute_id'];
	 $program_id = $_POST['program_id'];
	 $Components_id = $_POST['Components_id'];
	 $Section_id = $_POST['section_id'];
	 $Quiz_name = $_POST['quiz_name'];
	 $Quiz_start_time = $_POST['quiz_start_time'];  
	 $Quiz_end_time = $_POST['quiz_end_time'];
	 $Quiz_date = $_POST['quiz_date'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `quiz`(`stream_id`, `institute_id`, `program_id`, `component_id`, `section_id`, `quiz_name`, `quiz_start_time`, `quiz_end_time`, `quiz_date`, `create_date`, `update_date`) VALUES ('$Education_stream','$institute_id','$program_id',' $Components_id','$Section_id','$Quiz_name','$Quiz_start_time','$Quiz_end_time','$Quiz_date','$current_date_time','NULL')";

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addquiz_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/quiz.php','_self');
                    </script>";
	 } else {
		$_SESSION['quiz_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/quiz.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>