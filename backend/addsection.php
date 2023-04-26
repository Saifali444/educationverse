<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
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
	 
	 $sql = "INSERT INTO `section`(`stream_id`, `institute_id`, `program_id`, `component_id`, `subject_id`, `section_name`, `teacher_assign`, `notes`, `assignment`, `model_paper`, `past_paper`, `midterm_paper`, `final_paper`, `videos`, `quiz`, `lecture_start_time`, `lecture_end_time`, `lecture_day_MONDAY`, `lecture_day_TUESDAY`, `lecture_day_WEDNESDAY`, `lecture_day_THURSDAY`, `lecture_day_FRIDAY`, `lecture_day_SATURDAY`, `lecture_day_SUNDAY`, `teacher_asst_1`, `teacher_asst_2`, `create_date`, `update_date`) VALUES ('$Education_stream','$institute_id','$program_id','$Components_id','$Subject_id','$Section_name','$Teacher_assign','$Notes','$Assignment','$Model_paper','$Past_paper','$Midterm_paper','$Final_paper','$Videos','$Quiz','$Lecture_start_time','$Lecture_end_time','$Lecture_day_MONDAY','$Lecture_day_TUESDAY','$Lecture_day_WEDNESDAY','$Lecture_day_THURSDAY','$Lecture_day_FRIDAY','$Lecture_day_SATURDAY','$Lecture_day_SUNDAY','$Teacher_asst_1','$Teacher_asst_2','$current_date_time','NULL')";

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addsection_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/section.php','_self');
                    </script>";
	 } else {
		$_SESSION['addsection_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/section.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>