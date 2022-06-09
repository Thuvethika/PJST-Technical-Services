<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
<link rel ="stylesheet" type="text/css" href="signup1.css">
<style>body{background-image: url('../home/images/bg3.jpg');}</style>
</head>
<body>
<div class="loginbox">
<form method="post" action="process.php" >
  
  
<img src="../home/images/avatar.png" class="avatar">
   <center> <h1>Create a new account</h1> </center>
  <br><br>
     <label for="customer_id"><b>Customer ID</b></label><br>
    <input type="text" placeholder="Enter your ID" name="customer_id" required>
    <br><br>

   <label for="first_name"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter your first name" name="first_name" required>
    <br><br>
	<label for="last_name"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter your last name" name="last_name" required>
    <br><br>
	
	<label for="email"><b>Email</b></label><br >
    <input type="email" placeholder="Enter your Email" name="email" required>
	<br> <br>
	
	<label for="contact_no"><b>Contact Number</b></label><br>
    <input type="number" placeholder="Enter your contact number" name="contact_no" required>
	<br> <br>
	
	<label for="address"><b>Address</b></label><br >
    <input type="text" placeholder="Enter your address" name="address" required>
	<br> <br>
   	
    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
     <br>  <br>	 
	 
	<br><br> <center>
    <button type="submit" class="detail" name="submit" value="submit">Sign Up</button> 
	
	<a href="../home/layout.php"><button type="button" class="detail">Cancel</button></a><!--cancel btn-->
	
  
</form>
</div>
</body>
</html>