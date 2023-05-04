<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
	 $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Program_id = $_POST['program_id'];
	 $Component_id = $_POST['component_id'];
	 $Subject_id = $_POST['subject_id'];
	 $Question_type_name = $_POST['question_type_name'];
	 $Question_type_main = $_POST['question_type_main'];
	 $Question_subtype = $_POST['question_subtype'];  
	 $Question_subtype = $_POST['question_subtype']; 
	 $Description = $_POST['description'];
	 $Question_type_status = $_POST['question_type_status'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `question_type`(`stream_id`, `institute_id`, `program_id`, `component_id`, `subject_id`, `question_type_name`, `question_type_main`, `question_subtype`, `description`, `question_type_status`, `create_date`, `update_date`) VALUES ('$Stream_id','$Institute_id','$Component_id','$Subject_id','$Question_type_name','$Question_type_main','$Question_subtype','$Description','$Question_type_status','$current_date_time','NULL')";
	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addquestion_type_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/question_type.php','_self');
                    </script>";
	 } else {
		$_SESSION['addquestion_type_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/question_type.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>