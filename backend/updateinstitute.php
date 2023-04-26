<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $institute_id = $_POST['institute_id'];
     $stream_id = $_POST['stream_id'];
     $institute_name = $_POST['institute_name'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `education_institute` SET `stream_id`='$stream_id',`institute_name`='$institute_name',`update_date`='$current_date_time' WHERE institute_id = '$institute_id' ";


if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updateinstitute_success'] = 'Record updated successfully !';
  	
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
} else {
  $_SESSION['updateinstitute_unsuccess'] = 'Record is not updated !';
  
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
}

$conn->close();
	
	
}
?>