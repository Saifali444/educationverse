<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Question_type_id = $_POST['question_type_id'];
     $Question_id = $_POST['question_id'];
     $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Program_id = $_POST['program_id'];
	 $Component_id = $_POST['component_id'];
	 $Subject_id = $_POST['subject_id'];
	 $Question_type_name = $_POST['question_type_name'];
	 $Question_type_main = $_POST['question_type_main'];
	 $Question_subtype = $_POST['question_subtype'];  
	 $Description = $_POST['description'];
	 $Question_type_status = $_POST['question_type_status'];
	 $Update_date = $_POST['update_date'];
	 
	 $sql = "UPDATE `question_type` SET `question_type_id`='$Question_type_id',`stream_id`='$Stream_id',`institute_id`='$institute_id',`program_id`='$program_id',`component_id`='$Components_id',`subject_id`='$Subject_id',`question_type_name`='$Question_type_name',`question_type_main `='$Question_type_main',`question_subtype`='$Question_subtype',`description`='$Description',`question_type_status`='$Question_type_status',`update_date`='$current_date_time'   WHERE question_type_id = '$Question_type_id' ";
	

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['question_type_success'] = 'Record updated successfully !';
		header("Location: ../frontend/question_type.php");
} else {
  $_SESSION['question_type_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/question_type.php");
}

$conn->close();
	
	
}
?>