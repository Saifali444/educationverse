<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
	 $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Program_id = $_POST['program_id'];
	 $Component_id = $_POST['component_id'];
	 $Subject_name = $_POST['subject_name'];
	 $Subject_fee = $_POST['subject_fee'];
	 $Topic = $_POST['topic'];
	 $Course_outline = $_POST['course_outline'];  
	 $Course_learning_objective = $_POST['course_learning_objective'];
	 $Study_model = $_POST['study_model'];
	 $Subject_code = $_POST['subject_code'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `subject`(`stream_id`, `institute_id`, `program_id`, `component_id`, `subject_name`, `subject_fee`, `topic`, `course_outline`, `course_learning_objective`, `study_model`, `subject_code`, `create_date`, `update_date`) VALUES ('$Stream_id','$Institute_id ','$Program_id ','$Component_id ','$Subject_name ','$Subject_fee ','$Topic ','$Course_outline ','$Course_learning_objective ','$Study_model ','$Subject_code ','$current_date_time ','NULL')";
	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addsubject_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/subject.php','_self');
                    </script>";
	 } else {
		$_SESSION['addsubject_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/subject.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>