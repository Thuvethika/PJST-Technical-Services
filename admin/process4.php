<?php
include_once 'connect.php';



if(isset($_POST['save']))
{	 
	print_r($_POST);
	$position="customer";
	$cid = $_POST['cid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cno = $_POST['cno'];
	$address = $_POST['address'];
	$psw = $_POST['psw'];
	
	$sql = "INSERT INTO customer (customer_id,first_name,last_name,email,contact_no,address,password,position)
    VALUES ('$cid','$fname','$lname','$email','$cno','$address','$psw','$position')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:customerdetails.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

