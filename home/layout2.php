<?php

session_start();
if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }
  ?>


<html>
<head>

  <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
  <title>Technical support management system</title>
  <link rel="stylesheet" href="mystyle.css">


</head>
<body>
    
   <div class ="container">
      <div class="navbar">
         
         <nav>
          <ul>

          <li><a href="../dashboard/dashboard1.php">Dashboard</a></li>
          <li><a href="../dashboard/incident.php">Incidents</a></li>
          <li><a href="../FAQ/faqs.html">FAQs</a></li>
          <li><a href="../Tutorial/tutorials.html">Tutorials</a></li>
          <li><a href="../forum/discussion.php">Community Forum</a></li>
          <li><a href="../settings/settings.php">Settings</a></li>
          <li><?php 
             if(ISSET($_SESSION['username']))
             {
                echo '<a href="../login/logout.php?logout">Logout</a>';
             } ?>
          </ul>
          </nav>
        
   </div>




   <div class="row">
   
   
<div class="fade-in">
<p style="color:#006db1"><img src="images/logo.png" class="logo">
       PJST Technical services</p><br >
         <p>Helping you get ahead on</p>
         <p>the technology highway</p>
</div>
  
</div>
</div>
           
<div class="container2">

                
                <p style="color:#808080; font-size: 25px; text-align: center; margin-top:50px; margin-left:40px; margin-right:40px;">
                    PJST Technical Services is a fully fledged Information Technology solutions provider offering a wide range of end to end technology solutions, with over two decades of rendering invaluable service to our valuable clientele across different industries.
                </p><br><br>
                
                <p style="color:#808080; font-size: 25px; text-align: center; margin-left:40px; margin-right:40px;">
                    Our passion & dedication is for your reach the pinnacle in technology and we thrive to excel ourselves in that stride to the best of our ability.
                </p><br><br><br>

<h3>Services</h3><br><br>
<center>
<div class="col">
<a href="../dashboard/dashboard1.php">
   <div class="card card1">
    <h5>Dekstops</h5>
  
   </div>
</a>

<a href="../dashboard/dashboard1.php">

     <div class="card card2">
    <h5>Laptops</h5>
    
    </div>
</a>
<a href="../dashboard/dashboard1.php">
  <div class="card card3" >
    <h5>Phones</h5>
     
  </div>
  </a>
  
  </div><br><br><br><br>
</center>
<h3>Contact Us</h3><br><br><br><br><br><br>
<div class="social">
<ul>
     <li><img src="images/fb.png" width="50" height="50"></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><img src="images/tube.png" width="50" height="50"></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><img src="images/link.png" width="50" height="50"></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><img src="images/twit.png" width="50" height="50"></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a target="_top" href="mailto:grp201109@gmail.com"><img src="images/gmail.png" width="50" height="50"></a></li>
      

</ul>
</div>


</div>






</body>
</html>