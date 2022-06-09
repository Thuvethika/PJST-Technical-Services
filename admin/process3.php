<?php
include_once 'connect.php';



if(isset($_POST['save']))
{	 
	print_r($_POST);
	$eid = $_POST['eid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cno = $_POST['cno'];
	$address = $_POST['address'];
	$pos = $_POST['pos'];
	$date = date('Y-m-d');
	$psw = $_POST['psw'];
	
	$sql = "INSERT INTO employee (employee_id,first_name,last_name,email,contact_no,address,password,date_joined,position)
    VALUES ('$eid','$fname','$lname','$email','$cno','$address','$psw','$date','$pos')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:employeedetails.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

