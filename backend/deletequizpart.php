<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Quiz_part_id = $_GET['quiz_part_id'];

	 
	 $sql = "DELETE FROM `quiz_part`  WHERE quiz_part_id   = '$Quiz_part_id'";
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deletequizpart_success'] = 'Record delete successfully !';
		header("Location: ../frontend/quizpart.php");
} else {
  $_SESSION['deletequizpart_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/quizpart.php");
}

$conn->close();
	
	
}
?>