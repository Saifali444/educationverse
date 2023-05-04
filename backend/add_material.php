<?php
ob_start(); 
session_start();
include 'config.php';
if(isset($_POST['save']))
{	
    
	  $materail_type = $_POST['materail_type'];
	  $sid = $_POST['sid'];

	  
	  $filename = $_FILES["material"]["name"];
      $tempname = $_FILES["material"]["tmp_name"];  
      $folder = "image/".$filename;  
	 
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 if (move_uploaded_file($tempname, $folder)) {
	      $sql = "INSERT INTO `Material`(`section_id`, `Material_type`, `Material_name`, `create_date`) 
	      VALUES ('$sid','$materail_type','$filename','$current_date_time')";
	
	     	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['addinstitute_success'] = 'New record created successfully !';
		header("Location: ../frontend/viewsection.php?sid=".$sid);

    	 }else{
    		$_SESSION['addinstitute_unsuccess'] = 'New record is not created !';
    	    	header("Location: ../frontend/viewsection.php?sid=".$sid);
    	 }

	     
	 }else{
	     echo"File Not Uploaded";
	 }
	 
   

}else{
    echo"i am here";
}
?>