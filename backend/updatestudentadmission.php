<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
     $Student_admission_id = $_POST['student_admission_id'];
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
	 
	 $sql = "UPDATE `student_admission` SET `student_admission_id`=[value-1],`user_id`=[value-2],`program_id`=[value-3],`subject_id`=[value-4],`section_id`=[value-5],`study_model`=[value-6],`installments`=[value-7],`challan_name`=[value-8],`challan_downloaded`=[value-9],`challan_paid`=[value-10],`challan_paid_name`=[value-11],`student_pic`=[value-12],`identity_proof`=[value-13],`previous_institute_name`=[value-14],`marks_obtained`=[value-15],`total_marks`=[value-16],`marks_percentage`=[value-17],`latest_marks_sheet`=[value-18],`create_date`=[value-19],`update_date`=[value-20] WHERE section_id = '$Section_id' ";
     
	
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