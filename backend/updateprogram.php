<?php
ob_start(); 
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $program_id = $_POST['program_id'];
	 $Education_stream = $_POST['Education_stream'];
	 $Program_Name = $_POST['Program_Name'];
	 $Program_Duration = $_POST['Program_Duration'];
	 $Program_Code = $_POST['Program_Code'];
	 $Education_institute = $_POST['Education_institute'];
	 $Program_Fee = $_POST['Program_Fee'];
	 $Program_status = $_POST['Program_status'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `program` SET `stream_id`='$Education_stream',`institute_id`='$Education_institute',`program_name`='$Program_Name',`program_duration`='$Program_Duration',`program_code`='$Program_Code',`program_fees`='$Program_Fee',`program_status`='$Program_status',`update_date`='$current_date_time'  WHERE program_id = '$program_id' ";
     
     if ($conn->query($sql) === TRUE) {
  
  	    $_SESSION['updateprogram_success'] = 'Record updated successfully !';
		header("Location: ../frontend/updateprogram.php?pid=".$program_id);
		

     } else {
        $_SESSION['updateprogram_unsuccess'] = 'Record is not updated !';
		header("Location: ../frontend/updateprogram.php?pid=".$program_id);
		

     }

$conn->close();
	
	
}
?>