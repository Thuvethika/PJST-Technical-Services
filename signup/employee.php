<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
<link rel ="stylesheet" type="text/css" href="Signup.css">
</head>
<body bgcolor="#8080ff">
<form method="post" action="process.php" >
  
  <div class="container">
   <center> <h1>Create a new account</h1> </center>
  <br><br>
   <label for="first_name"><b>First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="first_name" required>
    <br><br>
	<label for="last_name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="last_name" required>
    <br><br>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your Email" name="email" required>
	<br> <br>
	
	<label for="contact_no"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="contact_no" required>
	<br> <br>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" required>
	<br> <br>
   
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>  <br>
	
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
     <br>  <br>
	 
	 <label for="Confirm_password"><b>Confirm Password</b></label>
    <input type="password" placeholder="Re-enter password" name="confirm_password" id="confirm_password" required>
	 <br><br>
	
	 
	 
   <input type="checkbox" checked="checked" name="remember"> Remember me
    
	<br><br> <center>
    <button type="submit" class="submit" name="submit" value="submit">Sign Up</button> 
	
	<button type="reset" class="cancel">Cancel</button>
	</center>
	
  </div>  
</form>
</body>
</html>