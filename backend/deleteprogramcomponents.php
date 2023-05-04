<?php
session_start();
include 'config.php';
	 
     $Components_id = $_GET['cid'];

	 
	 $sql = "DELETE FROM `program_components`  WHERE components_id   = '$Components_id'";

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['deleteprogramcomponents_success'] = 'Record delete successfully !';
  	
  	 echo "
                    <script>
                        window.open('https://educationverse.org/frontend/viewprogram.php','_self');
                    </script>";
} else {
  $_SESSION['deleteprogramcomponents_unsuccess'] = 'Record is not delete !';
			 echo "
                    <script>
                        window.open('https://educationverse.org/frontend/viewprogram.php','_self');
                    </script>";
}

$conn->close();
	

?>