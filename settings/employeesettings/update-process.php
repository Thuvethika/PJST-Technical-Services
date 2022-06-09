<?php
require 'database.php';
session_start();

if(isset($_POST['update']))
{
	


	$sql="UPDATE customer SET customer_id='" . $_POST['username'] ."',first_name='" . $_POST['first_name'] ."',last_name='" . $_POST['last_name'] ."',email='" . $_POST['email'] ."',contact_no='" . $_POST['contact_no'] ."',address='" . $_POST['address'] ."'where customer_id= '" .$_SESSION['username']."' ";
	if (mysqli_query($conn, $sql)) {
		echo " record modified successfully !";
		header("location:../dashboard/dashboard1.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}	
?>
<html>
<head> 
<title> settings </title>
</head>
<body>

<center><h1> Edit details </h1></center>


<form action="update.php" method="POST">

    <div class="input-group">
    <label for="first_name"><b>First Name</b></label>
	<input type="text" placeholder="Enter your first name" name="first_name" value="<?php echo $row['first_name']; ?>">
    </div>
	
	<label for="last_name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="last_name" value="<?php echo $row['last_name']; ?>">
    <br><br>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your Email" name="email" value="<?php echo $row['email']; ?>">
	<br> <br>
	
	<label for="contact_no"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="contact_no" value="<?php echo $row['contact_no']; ?>">
	<br> <br>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" value="<?php echo $row['address']; ?>">
	<br> <br>
   
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" value="<?php echo $row['customer_id']; ?>">
    <br>  <br>

    <button type="submit" class="registerbtn" name='update'>Submit</button>
    <button type="button" class="btncancel" onclick="closeupdateform()"><a href="../dashboard/dashboard1.php">Close</a></button>


</body>
</html>