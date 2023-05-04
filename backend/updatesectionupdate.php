<?php
ob_start(); 
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 

	 $Section_id = $_POST['section_id'];
	 $Subject_id = $_POST['Education_Subject'];
	 $Videos = $_POST['video_url'];
	 $Lecture_start_time = $_POST['Start_Time'];
	 $Lecture_end_time = $_POST['End_time'];
	 $Lecture_day_MONDAY = $_POST['Monday'];
	 $Lecture_day_TUESDAY = $_POST['Tuesday'];
	 $Lecture_day_WEDNESDAY = $_POST['Wednesday'];
	 $Lecture_day_THURSDAY = $_POST['Thursday'];
	 $Lecture_day_FRIDAY = $_POST['Friday'];
	 $Lecture_day_SATURDAY = $_POST['Saturday'];
	 $Lecture_day_SUNDAY = $_POST['Sunday'];
	 $Teacher_asst_1 = $_POST['T_assistant1'];
	 $Teacher_asst_2 = $_POST['T_Assistant2'];
	 $update_date_time = date("Y-m-d H:i:s");


	 $sql = "UPDATE `section` SET `subject_id`='$Subject_id',`videos`='$Videos',`lecture_start_time`='$Lecture_start_time',`lecture_end_time`='$Lecture_end_time',
	 `lecture_day_MONDAY`='$Lecture_end_time',
	 `lecture_day_TUESDAY`='$Lecture_day_TUESDAY',
	 `lecture_day_WEDNESDAY`='$Lecture_day_WEDNESDAY',
	 `lecture_day_THURSDAY`='$Lecture_day_THURSDAY',
	 `lecture_day_FRIDAY`='$Lecture_day_FRIDAY',
	 `lecture_day_SATURDAY`='$Lecture_day_SATURDAY',
	 `lecture_day_SUNDAY`='$Lecture_day_SUNDAY',
	 `teacher_asst_1`='$Teacher_asst_1',
	 `teacher_asst_2`='$Teacher_asst_2',
	 `update_date`='$update_date_time' WHERE 
	 `section_id`='$Section_id'";
	 

	 
	 var_dump($sql);

    if ($conn->query($sql) === TRUE) {
      
      	$_SESSION['updatesection_success'] = 'Record updated successfully !';
    		header("Location: ../frontend/viewsection.php?sid=".$Section_id);
    } else {
        die();
      $_SESSION['updatesection_unsuccess'] = 'Record is not updated !';
    			header("Location: ../frontend/viewsection.php?sid=".$Section_id);
    }
    
    $conn->close();
	
	
	
	
	
// 	 $Notes = $_POST['Notes'];  
// 	 $Assignment = $_POST['Assignment'];
// 	 $Model_paper = $_POST['Model_paper'];
// 	 $Past_paper = $_POST['Past_paper'];
// 	 $Midterm_paper = $_POST['Midterm_paper'];
// 	 $Final_paper = $_POST['Final_paper'];	 
// 	 $Quiz = $_POST['Quiz'];	 
// 	  $filename = $_FILES["Notes"]["name"];
//       $tempname = $_FILES["Notes"]["tmp_name"];  
//       $folder = "image/".$filename; 
      
//       $filename1 = $_FILES["Assignment"]["name"];
//       $tempname1 = $_FILES["Assignment"]["tmp_name"];  
//       $folder1 = "image/".$filename1;  
      
      
//       $filename2 = $_FILES["Model_paper"]["name"];
//       $tempname2 = $_FILES["Model_paper"]["tmp_name"];  
//       $folder2 = "image/".$filename2;  
      
      
//       $filename3 = $_FILES["Past_paper"]["name"];
//       $tempname3 = $_FILES["Past_paper"]["tmp_name"];  
//       $folder3 = "image/".$filename3;  
      
      
//       $filename4 = $_FILES["Midterm"]["name"];
//       $tempname4 = $_FILES["Midterm"]["tmp_name"];  
//       $folder4 = "image/".$filename4; 
      
//       $filename5 = $_FILES["Final"]["name"];
//       $tempname5 = $_FILES["Final"]["tmp_name"];  
//       $folder5 = "image/".$filename5;
      
//       $filename6 = $_FILES["Quiz"]["name"];
//       $tempname6 = $_FILES["Quiz"]["tmp_name"];  
//       $folder6 = "image/".$filename6;
      
      
      
      
                // if (move_uploaded_file($tempname, $folder)) {
                //          if (move_uploaded_file($tempname1, $folder1)) {
                //                   if (move_uploaded_file($tempname2, $folder2)) {
                //                              if (move_uploaded_file($tempname3, $folder3)) {
                    
                    
                //                                 }else{
                //                                     echo"i am four";
                //                                 }
                    
                //                     }else{
                //                         echo"i am three";
                //                     }
                    
                //         }else{
                //             echo"i am two";
                //         }
                    
                // }else{
                //     echo"i am one";
                // }
                
                
}
?>