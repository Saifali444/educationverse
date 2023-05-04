<?php
session_start();
include 'config.php';
if(isset($_GET['id']))
{	 
     $Id = $_GET['id'];
	
	 $sql = "DELETE FROM `complaint/tech req` WHERE `id` = '$Id' ";

if ($conn->query($sql) === TRUE) {
   $_SESSION['deletecomplaint/tech req_success'] = 'Record delete successfully !';
	  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complaint_techreq.php','_self');
                    </script>";
		} 
		else {
   $_SESSION['deletecomplaint/techreq_unsuccess'] = 'Record is not delete !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/complaint_techreq.php','_self');
                    </script>";
}

$conn->close();

	
}
?>

