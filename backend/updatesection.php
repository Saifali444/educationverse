<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Section_id = $_POST['section_id'];
     $Education_stream = $_POST['Education_stream'];
	 $institute_id = $_POST['institute_id'];
	 $program_id = $_POST['program_id'];
	 $Components_id = $_POST['Components_id'];
	 $Subject_id = $_POST['Subject_id'];
	 $Section_name = $_POST['Section_name'];
	 $Teacher_assign = $_POST['Teacher_assign'];
	 $Notes = $_POST['Notes'];  
	 $Assignment = $_POST['Assignment'];
	 $Model_paper = $_POST['Model_paper'];
	 $Past_paper = $_POST['Past_paper'];
	 $Midterm_paper = $_POST['Midterm_paper'];
	 $Final_paper = $_POST['Final_paper'];
	 $Videos = $_POST['Videos'];
	 $Quiz = $_POST['Quiz'];
	 $Lecture_start_time = $_POST['Lecture_start_time'];
	 $Lecture_end_time = $_POST['Lecture_end_time'];
	 $Lecture_day_MONDAY = $_POST['Lecture_day_MONDAY'];
	 $Lecture_day_TUESDAY = $_POST['Lecture_day_TUESDAY'];
	 $Lecture_day_WEDNESDAY = $_POST['Lecture_day_WEDNESDAY'];
	 $Lecture_day_THURSDAY = $_POST['Lecture_day_THURSDAY'];
	 $Lecture_day_FRIDAY = $_POST['Lecture_day_FRIDAY'];
	 $Lecture_day_SATURDAY = $_POST['Lecture_day_SATURDAY'];
	 $Lecture_day_SUNDAY = $_POST['Lecture_day_SUNDAY'];
	 $Teacher_asst_1 = $_POST['Teacher_asst_1'];
	 $Teacher_asst_2 = $_POST['Teacher_asst_2'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "UPDATE `section` SET `section_id`='$Section_id',`stream_id`='$Education_stream',`institute_id`='$institute_id',`program_id`='$program_id',`component_id`='$Components_id',`subject_id`='$Subject_id',`section_name`='$Section_name',`teacher_assign`='$Teacher_assign',`notes`='$Notes',`assignment`='$Assignment',`model_paper`='$Model_paper',`past_paper`='$Past_paper',`midterm_paper`='$Midterm_paper',`final_paper`='$Final_paper',`videos`='$Videos',`quiz`='$Quiz',`lecture_start_time`='$Lecture_start_time',`lecture_end_time`='$Lecture_end_time',`lecture_day_MONDAY`='$Lecture_day_MONDAY',`lecture_day_TUESDAY`='$Lecture_day_TUESDAY',`lecture_day_WEDNESDAY`='$Lecture_day_WEDNESDAY',`lecture_day_THURSDAY`='$Lecture_day_THURSDAY',`lecture_day_FRIDAY`='$Lecture_day_FRIDAY',`lecture_day_SATURDAY`='$Lecture_day_SATURDAY',`lecture_day_SUNDAY`='$Lecture_day_SUNDAY',`teacher_asst_1`='$Teacher_asst_1',`teacher_asst_2`='$Teacher_asst_2',`create_date`='$current_date_time',`update_date`='NULL'  WHERE section_id = '$Section_id' ";
	 

if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatesection_success'] = 'Record updated successfully !';
		header("Location: ../frontend/section.php");
} else {
  $_SESSION['updatesection_unsuccess'] = 'Record is not updated !';
			header("Location: ../frontend/section.php");
}

$conn->close();
	
	
}
?>