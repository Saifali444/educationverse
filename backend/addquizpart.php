<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $Quiz_id = $_POST['quiz_id'];
	 $Question_type_main = $_POST['question_type_main'];
	 $Question_subtype = $_POST['question_subtype'];
	 $Total_questions = $_POST['total_questions'];
	 $Topic_id = $_POST['topic_id'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `quiz_part`(`quiz_id`, `question_type_main`, `question_subtype`, `total_questions`, `topic_id`, `create_date`, `update_date`) VALUES ('$Quiz_id','$Question_type_main','$Question_subtype','$Total_questions','$Topic_id','$current_date_time','NULL')";

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addquizpart_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/quizpart.php','_self');
                    </script>";
	 } else {
		$_SESSION['quizpart_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/quizpart.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>