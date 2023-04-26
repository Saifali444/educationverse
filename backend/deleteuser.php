<?php
session_start();
include 'config.php';
if(isset($_GET['uid']))
{	 
     $user_id = $_GET['uid'];
	

	 $sql = "DELETE FROM `user` WHERE user_id = '$user_id'";

if ($conn->query($sql) === TRUE) {
 
   $_SESSION['deleteuser_success'] = 'Record delete successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
		} 
		else {
	
    
   $_SESSION['deleteuser_unsuccess'] = 'record is not delete !';
			    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/users.php','_self');
                    </script>";
}

$conn->close();

	
}
?>