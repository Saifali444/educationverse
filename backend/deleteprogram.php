<?php
session_start();
include 'config.php';
if(isset($_POST['delete']))
{	 
     $Components_id = $_GET['components_id'];

	 
	 $sql = "DELETE FROM `program_components`  WHERE components_id = '$Components_id' ";
	
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deleteprogramcomponents_success'] = 'Record delete successfully !';
		header("Location: ../frontend/program.php");
} else {
  $_SESSION['deleteprogramcomponents_unsuccess'] = 'Record is not delete !';
			header("Location: ../frontend/program.php");
}

$conn->close();
	
	
}
?>