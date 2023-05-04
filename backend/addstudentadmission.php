<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
	 $User_id = $_POST['user_id'];
	 $Program_id = $_POST['program_id'];
	 $Subject_id = $_POST['subject_id'];
	 $Section_id = $_POST['section_id'];
	 $Study_model = $_POST['study_model'];
	 $Installments = $_POST['installments'];
	 $Challan_name = $_POST['challan_name'];
	 $Challan_downloaded = $_POST['challan_downloaded'];  
	 $Challan_paid = $_POST['challan_paid'];
	 $Challan_paid_name = $_POST['challan_paid_name'];
	 $Student_pic = $_POST['student_pic'];
	 $Identity_proof = $_POST['identity_proof'];
	 $Previous_institute_name = $_POST['previous_institute_name'];
	 $Marks_obtained = $_POST['marks_obtained'];
	 $Total_marks = $_POST['total_marks'];
	 $Marks_percentage = $_POST['marks_percentage'];
	 $Latest_marks_sheet = $_POST['latest_marks_sheet'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `student_admission`(`user_id`, `program_id`, `subject_id`, `section_id`, `study_model`, `installments`, `challan_name`, `challan_downloaded`, `challan_paid`, `challan_paid_name`, `student_pic`, `identity_proof`, `previous_institute_name`, `marks_obtained`, `total_marks`, `marks_percentage`, `latest_marks_sheet`, `create_date`, `update_date`) VALUES ('$User_id','$Program_id','$Subject_id','$Section_id','$Study_model','$Installments','$Challan_name ','$Challan_downloaded','$Challan_paid','$Challan_paid_name','$Student_pic','$Identity_proof','$Previous_institute_name','$Marks_obtained','$Total_marks','$Marks_percentage','$Latest_marks_sheet','$current_date_time','NULL')";

	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addstudentadmission_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/studentadmission.php','_self');
                    </script>";
	 } else {
		$_SESSION['addstudentadmission_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/studentadmission.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>