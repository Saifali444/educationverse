<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Question_type_id = $_GET['question_type_id'];

	 
	 $sql = "DELETE FROM `question_type`  WHERE question_type_id   = '$Question_type_id'";
	
	
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deletequestion_type_success'] = 'Record delete successfully !';
		header("Location: ../frontend/question_type.php");
} else {
  $_SESSION['deletequestion_type_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/question_type.php");
}

$conn->close();
	
	
}
?>