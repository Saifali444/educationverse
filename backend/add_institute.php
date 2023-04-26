<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
	 $institute_name = $_POST['Institute'];
	 $stream_id = $_POST['Education_stream'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 
	 
	 
	 $sql = "INSERT INTO `education_institute`(`stream_id`, `institute_name`, `create_date`, `update_date`) VALUES ('$stream_id','$institute_name','$current_date_time','NULL')";
	 

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addinstitute_success'] = 'New record created successfully !';
	
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
	 } else {
		$_SESSION['addinstitute_unsuccess'] = 'New record is not created !';
	    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/institute.php','_self');
                    </script>";
	 }
	 mysqli_close($conn);
}
?>