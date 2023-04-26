<?php
session_start();
include 'config.php';
if(isset($_GET['iid']))
{	 
     $user_id = $_GET['iid'];
	
	 

	 $sql = "DELETE FROM `education_institute` WHERE `institute_id` = '$user_id' ";

if ($conn->query($sql) === TRUE) {
   $_SESSION['deleteuser_success'] = 'Record delete successfully !';
	  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
		} 
		else {
   $_SESSION['deleteuser_unsuccess'] = 'Record is not delete !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
}

$conn->close();

	
}
?>

