<?php
session_start();
include 'config.php';
if(isset($_GET['fee_installment_id']))
{	 
     $Fee_installment_id = $_GET['fee_installment_id'];
	
	 

	 $sql = "DELETE FROM `fee_installment` WHERE `fee_installment_id` = '$Fee_installment_id' ";

if ($conn->query($sql) === TRUE) {
   $_SESSION['deletefee_installment_success'] = 'Record delete successfully !';
	  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
		} 
		else {
   $_SESSION['deletefee_installment_unsuccess'] = 'Record is not delete !';
		  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
}

$conn->close();

	
}
?>

