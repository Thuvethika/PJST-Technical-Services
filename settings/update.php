<?php
require '../dashboard/connect.php';
session_start();

if(isset($_POST['update']))
{
	


	$sql="UPDATE customer SET customer_id='" . $_POST['username'] ."',first_name='" . $_POST['first_name'] ."',last_name='" . $_POST['last_name'] ."',email='" . $_POST['email'] ."',contact_no='" . $_POST['contact_no'] ."',address='" . $_POST['address'] ."'where customer_id= '" .$_SESSION['username']."' ";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:../dashboard/dashboard1.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}	
?>
