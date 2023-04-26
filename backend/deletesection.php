<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Section_id = $_GET['section_id'];

	 
	 $sql = "DELETE FROM `section`  WHERE section_id   = '$Section_id'";
	
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deletesection_success'] = 'Record delete successfully !';
		header("Location: ../frontend/section.php");
} else {
  $_SESSION['deletesection_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/section.php");
}

$conn->close();
	
	
}
?>