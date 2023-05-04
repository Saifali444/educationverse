<?php
ob_start(); 
session_start();
include 'config.php';

    
    
    
    
     $Components_id = $_GET['pid'];

	 
	 $sql = "DELETE FROM `program` WHERE `program_id`='$Components_id'";
	
    if ($conn->query($sql) === TRUE) {
      
      	$_SESSION['deleteprogramcomponents_success'] = 'Record delete successfully !';
    		header("Location: ../frontend/program.php");
    } else {
      $_SESSION['deleteprogramcomponents_unsuccess'] = 'Record is not delete !';
    		header("Location: ../frontend/program.php");
    }

$conn->close();

?>