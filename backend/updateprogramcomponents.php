<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Components_id = $_POST['components_id'];
     $Education_stream = $_POST['Education_stream'];
	 $institute_id  = $_POST['institute_id'];
	 $program_id  = $_POST['program_id'];
	 $Component_name = $_POST['Component_name'];
	 $Component_code = $_POST['Component_code'];
	 $Component_fees = $_POST['Component_fees'];
	 $Component_type = $_POST['Component_type'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `program_components` SET `stream_id`='$Education_stream',`institute_id`='$institute_id',`program_id`='$program_id',`component_name`='$Component_name',`component_code`='$Component_code',`component_fees`='$Component_fees',`component_type`='$Component_type',`create_date`='$current_date_time',`update_date`='NULL'  WHERE components_id = '$Components_id' ";
	 

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updateprogramcomponents_success'] = 'Record updated successfully !';
		header("Location: ../frontend/program.php");
} else {
  $_SESSION['updateprogramcomponents_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/program.php");
}

$conn->close();
	
	
}
?>