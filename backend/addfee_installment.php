<?php
session_start();
include 'config.php';
if(isset($_POST['save']))
{	 
	 $User_id = $_POST['user_id'];
	 $Program_id = $_POST['program_id'];
	 $Installment_amount = $_POST['installment_amount'];
	 $Installment_due_date = $_POST['installment_due_date'];
	 $Installment_number = $_POST['installment_number'];
	 $Challan_name = $_POST['challan_name'];
	 $Challan_downloaded = $_POST['challan_downloaded'];
	 $Challan_status = $_POST['challan_status'];
	 $Challan_paid_name = $_POST['challan_paid_name'];
	 $current_date_time = date("Y-m-d H:i:s");
	 
	 $sql = "INSERT INTO `fee_installment`(`user_id`, `program_id`, `installment_amount`, `installment_due_date`, `installment_number`, `challan_name`, `challan_downloaded`,`challan_status`,`challan_paid_name`, `create_date`, `update_date`) 
	 VALUES ('$User_id','$Program_id','$Installment_amount','$Installment_due_date','$Installment_number','$Challan_name','$Challan_downloaded','$Challan_status','$Challan_paid_name','$current_date_time','NULL')";


	
	 if (mysqli_query($conn, $sql)) {
		
		$_SESSION['fee_installment_success'] = 'New record created successfully !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
	 } else {
		$_SESSION['fee_installment_unsuccess'] = 'New record is not created !';
		    echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
		
	 }
	 mysqli_close($conn);
}
?>