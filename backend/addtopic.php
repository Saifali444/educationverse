<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
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
	 
	 $sql = " INSERT INTO `topic`(`stream_id`, `institute_id`, `program_id`, `component_id`, `subject_id`, `topic_name`, `video_url`, `notes`, `topic_quiz_status`, `assignment`, `create_date`, `update_date`) VALUES ('$Stream_id','$Institute_id','$Program_id ','$Component_id ','$Subject_id ','$Topic_name ','$Video_url ','$Notes ','$Topic_quiz_status ','$Assignment ','$current_date_time ','NULL')";
    
	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addtopic_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
	 } else {
		$_SESSION['addtopic_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/topic.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>