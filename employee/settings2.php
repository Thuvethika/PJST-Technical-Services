<?php
    include_once '../dashboard/connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }

    $result = mysqli_query($conn,"SELECT * FROM employee where employee_id='".$_SESSION['username']."'");
    $row = mysqli_fetch_array($result);
?>

<html>
<head> 
<title> settings </title>
<link rel="stylesheet" href="../signup/signup1.css">
<style>body{background-image: url('../home/images/bg3.jpg');
}
h1{color:white;}

</style>
</head>
<body>

<center><h1 style="line-height:10"> General Account Settings </h1></center>
<div class="loginbox">
<form action="update.php" method="POST"><!--i changed this address,you have to change this-->

    <div class="input-group">
    <label for="first_name"><b>First Name</b></label><br>
	<input type="text" placeholder="Enter your first name" name="first_name" value="<?php echo $row['first_name']; ?>">
    </div>
	
	<label for="last_name"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter your last name" name="last_name" value="<?php echo $row['last_name']; ?>">
    <br><br>
	
	<label for="email"><b>Email</b></label><br >
    <input type="text" placeholder="Enter your Email" name="email" value="<?php echo $row['email']; ?>">
	<br> <br>
	
	<label for="contact_no"><b>Contact Number</b></label><br>
    <input type="number" placeholder="Enter your contact number" name="contact_no" value="<?php echo $row['contact_no']; ?>">
	<br> <br>
	
	<label for="address"><b>Address</b></label><br >
    <input type="text" placeholder="Enter your address" name="address" value="<?php echo $row['address']; ?>">
	<br> <br>
   
    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" value="<?php echo $row['employee_id']; ?>">
    <br>  <br>

    <button type="submit" class="detail" name='update'>Submit</button>
    <a href="dashboard2.php"><button type="button" class="detail">Close</button></a>
    
</div>

</body>
</html>