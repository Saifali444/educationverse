<?php
session_start();
include 'config.php';
if(isset($_GET['topicid']))
{	 
     $Topic_id = $_GET['topic_id'];
	

	 $sql = "DELETE FROM `topic` WHERE topic_id = '$Topic_id'";
	 
if ($conn->query($sql) === TRUE) {
 
   $_SESSION['topic_success'] = 'Record delete successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
		} 
		else {
	
    
   $_SESSION['topic_unsuccess'] = 'record is not delete !';
			    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
}

$conn->close();

	
}
?>