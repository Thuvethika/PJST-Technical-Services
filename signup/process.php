<?php
include_once '../dashboard/connect.php';
if(isset($_POST['submit']))
{	 
	 /*print_r($_POST);*/
	 $position="customer";
	 $customer_id = $_POST['customer_id'];
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $contact_no = $_POST['contact_no'];
	 $address = $_POST['address'];
	 $password = $_POST['password'];
	
	 $sql = "INSERT INTO customer (customer_id,first_name,last_name,email,contact_no,address,password,position)
	 VALUES ('$customer_id','$first_name','$last_name','$email','$contact_no','$address','$password','$position')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:../login/login.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

