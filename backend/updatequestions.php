<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Question_id = $_POST['question_id'];
     $Education_stream = $_POST['stream_id'];
	 $institute_id = $_POST['institute_id '];
	 $program_id = $_POST['program_id'];
	 $Components_id = $_POST['component_id '];
	 $Subject_id = $_POST['subject_id'];
	 $Topic_id = $_POST['topic_id'];
	 $Question_type_id = $_POST['question_type_id'];
	 $Instructions = $_POST['instructions'];
	 $Question = $_POST['question'];
	 $Question_solution1 = $_POST['question_solution1'];
	 $Question_solution2 = $_POST['question_solution2'];
	 $Question_solution3 = $_POST['question_solution3']; 
	 $Question_solution4 = $_POST['question_solution4'];
	 $Correct_answer = $_POST['correct_answer'];
	 $Question_type = $_POST['question_type'];
	 $Question_marks = $_POST['question_marks'];
	 $Question_time_allowed = $_POST['question_time_allowed'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `questions` SET `question_id`='$Question_id',`stream_id`='$Education_stream',`institute_id`='$institute_id',`program_id`='$program_id',`component_id`='$Components_id',`subject_id`='$Subject_id',`topic_id`='$Topic_id',`question_type_id`='$Question_type_id',`instructions`='$Instructions',`question`='$Question',`question_solution1`='$Question_solution1',`question_solution2`='$Question_solution2',`question_solution3`='$Question_solution3',`question_solution4`='$Question_solution4',`correct_answer`='$Correct_answer',`question_type`='$Question_type',`question_marks`='$Question_marks',`question_time_allowed`='$Question_time_allowed',`create_date`='$current_date_time'   WHERE question_id = '$Question_id' ";
	

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatequestions_success'] = 'Record updated successfully !';
		header("Location: ../frontend/questions.php");
} else {
  $_SESSION['updatequestions_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/questions.php");
}

$conn->close();
	
	
}
?>