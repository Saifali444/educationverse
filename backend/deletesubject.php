<?php
session_start();
include 'config.php';
if(isset($_GET['topicid']))
{	 
     $Subject_id = $_GET['subject_id'];
	

	 $sql = "DELETE FROM `subject` WHERE subject_id = '$Subject_id'";
	 
if ($conn->query($sql) === TRUE) {
 
   $_SESSION['subject_success'] = 'Record delete successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
		} 
		else {
	
    
   $_SESSION['subject_unsuccess'] = 'record is not delete !';
			    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
}

$conn->close();

	
}
?>