<?php
session_start();
include 'config.php';
if(isset($_POST['submit']))
{	
    
	$username = $_POST["name"];
    $password = $_POST["pass"];

    $sql = "Select * from `user` where `user_email`='$username' AND `user_password`='$password'";

	  $result = mysqli_query($conn,$sql);
      
   
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
	   
	  
      	
      if($count == 1) {
          
		
		$_SESSION['login_success'] = $row['user_id'];

	
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/index.php','_self');
                    </script>";
                    
                    
	 } else {
		$_SESSION['login_unsuccess'] = 'login failed!';
	    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/login.php','_self');
                    </script>";
	 }
	 
	 mysqli_close($conn);
}
?>