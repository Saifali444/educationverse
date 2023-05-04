<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Quiz_part_id = $_POST['quiz_part_id'];
     $Quiz_id = $_POST['quiz_id'];
     $Question_type_main = $_POST['question_type_main'];
	 $Question_subtype = $_POST['question_subtype'];
	 $Total_questions = $_POST['total_questions'];
	 $Topic_id = $_POST['topic_id'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = " UPDATE `quiz_part` SET `quiz_part_id`='$Quiz_part_id',`quiz_id`='$Quiz_id',`question_type_main`='$Question_type_main',`question_subtype`='$Question_subtype',`total_questions`='$Total_questions',`topic_id`='$Topic_id',`create_date`='$current_date_time',`update_date`='NULL'  WHERE quiz_part_id = '$quiz_part_id' ";
	 

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatequizpart_success'] = 'Record updated successfully !';
		header("Location: ../frontend/quizpart.php");
} else {
  $_SESSION['updatequizpart_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/quizpart.php");
}

$conn->close();
	
	
}
?>