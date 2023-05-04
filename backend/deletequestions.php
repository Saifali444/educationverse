<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Question_id = $_GET['question_id'];

	 
	 $sql = "DELETE FROM `questions`  WHERE question_id   = '$Question_id'";
	
	
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deletequestions_success'] = 'Record delete successfully !';
		header("Location: ../frontend/questions.php");
} else {
  $_SESSION['deletequestions_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/questions.php");
}

$conn->close();
	
	
}
?>