<?php
    include_once '../dashboard/connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }

    $result = mysqli_query($conn,"SELECT * FROM customer where customer_id='".$_SESSION['username']."'");
    $row = mysqli_fetch_array($result);
?>

<html>
<head> 
<title> settings </title>
<link rel="stylesheet" href="../signup/signup1.css">
<style>body{background-image: url('../home/images/bg3.jpg');}</style>

</head>
<body>

<center><h1 style="color:white;line-height:10"> General Account Settings </h1></center>
<div class="loginbox">
<form action="update.php" method="POST">

    <div class="input-group">
    <label for="first_name"><b>First Name</b></label><br>
	<input type="text"  name="first_name" value="<?php echo $row['first_name']; ?>">
    </div>
	
	<label for="last_name"><b>Last Name</b></label><br>
    <input type="text"  name="last_name" value="<?php echo $row['last_name']; ?>">
    <br><br>
	
	<label for="email"><b>Email</b></label><br >
    <input type="text" name="email" value="<?php echo $row['email']; ?>">
	<br> <br>
	
	<label for="contact_no"><b>Contact Number</b></label><br>
    <input type="number" name="contact_no" value="<?php echo $row['contact_no']; ?>">
	<br> <br>
	
	<label for="address"><b>Address</b></label><br >
    <input type="text" name="address" value="<?php echo $row['address']; ?>">
	<br> <br>
   
    <label for="username"><b>Username</b></label><br>
    <input type="text" name="username" value="<?php echo $row['customer_id']; ?>">
    <br>  <br>

    <button type="submit" class="detail" name='update'>Submit</button>
    <a href="../dashboard/dashboard1.php"><button type="button" class="detail" >Close</button></a><br ><br ><br>
    <button type="submit" class="detail" name='update'>Remove Account
    <?php 
             if(ISSET($_SESSION['username']))
             {
                echo '<a href="delete-process.php?logout"></a>';
             } ?>    
    
    </button>

            </div>
</body>
</html>