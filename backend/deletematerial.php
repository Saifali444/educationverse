<?php
ob_start(); 
session_start();
include 'config.php';

     $mid = $_GET['mid'];
	 $sid = $_GET['sid'];
	 

	 $sql = "DELETE FROM `Material` WHERE `material_id`='$mid'";

if ($conn->query($sql) === TRUE) {
   $_SESSION['deleteuser_success'] = 'Record delete successfully !';
		header("Location: ../frontend/viewsection.php?sid=".$sid);
		} 
		else {
		      $_SESSION['deleteuser_success'] = 'Record Not delete successfully !';
     	header("Location: ../frontend/viewsection.php?sid=".$sid);


	
}
?>

