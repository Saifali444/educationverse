<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Quiz_id = $_GET['quiz_id'];

	 
	 $sql = "DELETE FROM `quiz`  WHERE quiz_id   = '$Quiz_id'";
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deletequiz_success'] = 'Record delete successfully !';
		header("Location: ../frontend/quiz.php");
} else {
  $_SESSION['deletequiz_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/quiz.php");
}

$conn->close();
	
	
}
?>