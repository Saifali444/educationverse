<?php
session_start();
include 'config.php';
if(isset($_GET['studentadmissionid']))
{	 
     $Student_admission_id = $_GET['student_admission_id'];
	

	 $sql = "DELETE FROM `student_admission` WHERE user_id = '$student_admission_id'";
	 
if ($conn->query($sql) === TRUE) {
 
   $_SESSION['deletestudentadmission_success'] = 'Record delete successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/studentadmission.php','_self');
                    </script>";
		} 
		else {
	
    
   $_SESSION['deletestudentadmission_unsuccess'] = 'record is not delete !';
			    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/studentadmission.php','_self');
                    </script>";
}

$conn->close();

	
}
?>