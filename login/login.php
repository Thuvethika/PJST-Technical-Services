
<html>
<head>

<title> login </title>
<link rel ="stylesheet" type="text/css" href="login.css">
<style>body{background-image:url('../home/images/bg3.jpg');}</style>
</head>

<div class="loginbox">
<img src="../home/images/avatar.png" class="avatar">
<form action="process1.php" method="post">
  
   <h1>Log In</h1> <br >
    <label for="uname"><b>Username/id</b></label><br ><br >
    <input type="text" placeholder="Enter Username" name="uname" required>
 <br ><br >
    <label for="psw"><b>Password</b></label>
<br ><br >
    <input type="password" placeholder="Enter Password" name="psw" required>
  <br ><br >

    <button type="submit" class="detail" name='login'>Log In</button> <!--login btn-->
	
	<a href="../home/layout.php"><button type="button" class="detail">Cancel</button></a><!--cancel btn-->
	<br ><br ><br ><br >

	<button onclick="document.location='../signup/signup.php'" class="detail">Create New Account</button><!--signup btn-->
	
	
  
</form>

</div>


</body>
</html>