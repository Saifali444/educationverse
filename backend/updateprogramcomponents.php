<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Components_id = $_POST['Component_id'];
	 $Component_name = $_POST['Component_name'];
	 $Component_code = $_POST['Component_code'];
	 $Component_fees = $_POST['Component_fees'];
	 $Component_type = $_POST['Component_type'];
	 $update_date_time = date("Y-m-d H:i:s");

	 $sql = "UPDATE `program_components` SET `component_name`='$Component_name',`component_code`='$Component_code',`component_fees`='$Component_fees',`component_type`='$Component_type',`update_date`='$update_date_time'  WHERE components_id = '$Components_id' ";
	 
	 
if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updateprogramcomponents_success'] = 'Record updated successfully !';
  	
  	 echo "
                    <script>
                        window.open('https://educationverse.org/frontend/updatecomponent.php','_self');
                    </script>";
} else {
  $_SESSION['updateprogramcomponents_unsuccess'] = 'Record is not updated !';
			 echo "
                    <script>
                        window.open('https://educationverse.org/frontend/updatecomponent.php','_self');
                    </script>";
}

$conn->close();
	
	
}
?>