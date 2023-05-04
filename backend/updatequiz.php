<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Quiz_id = $_POST['quiz_id'];
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
	 
	 $sql = "UPDATE `quiz` SET `quiz_id`='$Quiz_id',`stream_id`='$Education_stream',`institute_id`='$institute_id',`program_id`='$program_id',`component_id`='$Components_id',`section_id`='$Section_id',`quiz_name`='$Quiz_name',`quiz_start_time`='$Quiz_start_time',`quiz_end_time`='$Quiz_end_time',`quiz_date`='$Quiz_date',`create_date`='$current_date_time',`update_date`='NULL'  WHERE quiz_id = '$Quiz_id' ";
	 

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatequiz_success'] = 'Record updated successfully !';
		header("Location: ../frontend/quiz.php");
} else {
  $_SESSION['updatequiz_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/quiz.php");
}

$conn->close();
	
	
}
?>