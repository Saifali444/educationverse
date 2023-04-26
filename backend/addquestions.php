<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
  
	 $Education_stream = $_POST['stream_id'];
	 $institute_id = $_POST['institute_id '];
	 $program_id = $_POST['program_id'];
	 $Components_id = $_POST['component_id '];
	 $Subject_id = $_POST['subject_id'];
	 $Topic_id = $_POST['topic_id'];
	 $Question_type_id = $_POST['question_type_id'];
	 $Instructions = $_POST['instructions'];
	 $Question = $_POST['question'];
	 $Question_solution1 = $_POST['question_solution1'];
	 $Question_solution2 = $_POST['question_solution2'];
	 $Question_solution3 = $_POST['question_solution3']; 
	 $Question_solution4 = $_POST['question_solution4'];
	 $Correct_answer = $_POST['correct_answer'];
	 $Question_type = $_POST['question_type'];
	 $Question_marks = $_POST['question_marks'];
	 $Question_time_allowed = $_POST['question_time_allowed'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `questions`(`stream_id`, `institute_id`, `program_id`, `component_id`, `subject_id`, `topic_id`, `question_type_id`, `instructions`, `question`, `question_solution1`, `question_solution2`, `question_solution3`, `question_solution4`, `correct_answer`, `question_type`, `question_marks`, `question_time_allowed`, `create_date`, `update_date`) VALUES ('$Education_stream','$institute_id','$program_id','$Components_id',' $Subject_id','$Topic_id','$Question_type_id','$Instructions','$Question',' $Question_solution1','$Question_solution2','$Question_solution3','$Question_solution4','$Correct_answer','$Question_type','$Question_marks','$Question_time_allowed','$current_date_time','NULL')";


	 if (mysqli_query($conn, $sql)) {
	
		$_SESSION['addquestions_success'] = 'New record created successfully !';
		
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/questions.php','_self');
                    </script>";
	 } else {
		$_SESSION['addquestions_unsuccess'] = 'New record is not created !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/questions.php','_self');
                    </script>";
	 }
	 mysqli_close($conn);
}
?>