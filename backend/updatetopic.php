<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
     $Topic_id = $_POST['topic_id'];
	 $Stream_id = $_POST['stream_id'];
	 $Institute_id = $_POST['institute_id'];
	 $Program_id = $_POST['program_id'];
	 $Component_id = $_POST['component_id'];
	 $Subject_id = $_POST['subject_id'];
	 $Topic_name = $_POST['topic_name'];
	 $Video_url = $_POST['video_url'];
	 $Notes = $_POST['notes'];  
	 $Topic_quiz_status = $_POST['topic_quiz_status'];
	 $Assignment = $_POST['assignment'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = " UPDATE `topic` SET `topic_id`='$Topic_id',`stream_id`='$Stream_id',`institute_id`='$Institute_id',`program_id`='$Program_id',`component_id`='$Component_id',`subject_id`='$Subject_id',`topic_name`='$Topic_name',`video_url`='$Video_url',`notes`='$Notes',`topic_quiz_status`='$Topic_quiz_status',`assignment`='$Assignment',`create_date`='$current_date_time ',`update_date`='$current_date_time' WHERE `topic_id` ='$Topic_id' ";
    
	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['updatetopic_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
	 } else {
		$_SESSION['updatetopic_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>