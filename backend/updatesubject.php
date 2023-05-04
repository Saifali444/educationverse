<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Subject_id = $_POST['subject_id'];
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
	 $update_date_time= $_POST['update_date'];
	 
	 $sql = "UPDATE `subject` SET `subject_id`='$Subject_id',`stream_id`='$Stream_id',`institute_id`='$Institute_id',`program_id`='$Program_id',`component_id`='$Component_id',`subject_name`='$Subject_name',`subject_fee`='$Subject_fee',`topic`='$Topic',`course_outline`='$Course_outline',`course_learning_objective`='$Course_learning_objective',`study_model`='$Study_model',`subject_code`='$Subject_code',`update_date`='$update_date_time'  WHERE subject_id = '$Subject_id' ";
	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['updatesubject_success'] = 'Record updated successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/subject.php','_self');
                    </script>";
	 } else {
		$_SESSION['updatesubject_unsuccess'] = 'Record is not updated !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/subject.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>