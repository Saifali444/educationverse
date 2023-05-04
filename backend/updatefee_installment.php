<?php
session_start();
include 'config.php';
if(isset($_POST['update']))
{	 
     $Fee_installment_id = $_POST['fee_installment_id'];
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
	 
	 $sql = "UPDATE `fee_installment` SET `fee_installment_id`='$Fee_installment_id',
	 `user_id`='$User_id',`program_id`='$Program_id',`installment_amount`='$Installment_amount',
	 `installment_due_date`='$Installment_due_date',`installment_number`='$Installment_number',
	 `challan_name`='$Challan_name',`challan_downloaded`='$Challan_downloaded',
	 `challan_status`='$Challan_status',`challan_paid_name`='$Challan_paid_name',
	 `update_date`='$current_date_time' 
	 WHERE fee_installment = '$Fee_installment' ";


if ($conn->query($sql) === TRUE) {
  
  	$_SESSION['updatefee_installment_success'] = 'Record updated successfully !';
  	
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
} else {
  $_SESSION['updatefee_installment_unsuccess'] = 'Record is not updated !';
  
        echo "
                    <script>
                        window.open('https://educationverse.org/frontend/fee_installment.php','_self');
                    </script>";
}

$conn->close();
	
	
}
?>