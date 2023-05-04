<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 $id = $_POST['id'];
     $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Subject_id = $_POST['subject_id'];
	 $User_id = $_POST['user_id'];
	 $Details = $_POST['details'];
	 $Upload_file = $_POST['upload_file'];
	 $Type = $_POST['type'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `complaint/tech req` SET `id`='$id',`stream_id`='$id',
	 `institute_id`='$Stream_id',`subject_id`='$Subject_id',`user_id`='$User_id',
	 `details`='$Details',`upload_file`='$Upload_file',`type`='$Type',
	 `update_date`='$current_date_time' 
	 WHERE fee_installment = '$Fee_installment' ";


if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatecomplaint/tech req_success'] = 'Record updated successfully !';
  	
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complainttech_req.php','_self');
                    </script>";
} else {
  $_SESSION['updatecomplaint/tech req_unsuccess'] = 'Record is not updated !';
  
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complainttech_req.php','_self');
                    </script>";
}

$conn->close();
	
	
}
?>