<?php
    include_once 'connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }
?>



<html>
    <head>
        <title>Admin dashboard</title>
        <link rel="stylesheet" type="text/css" href="dashboard4.css">
        <link rel="stylesheet" type="text/css" href="icons.css">
        <style>body{background-image: url('../home/images/bg3.jpg');}</style>
        <script src="../dashboard/dashboard1.js"></script>
    </head>

    <body >

         <!--sidepannel-->
        <div id="Sidepanel1" class="sidepanel">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            <a href="dashboard3.php">Dashboard</a>
            <a href="../FAQ/faqs.html">FAQs</a>
            <a href="../Tutorial/tutorials.html">Tutorials</a>
            <hr>
            <?php 
             if(ISSET($_SESSION['username']))
             {
                echo '<a href="../login/logout.php?logout">Logout</a>';
             } ?>
          </div>
          
          <button class="openbtn" onclick="openNav()">☰ Menu</button>  
          <h1 class="h1c">Dashboard</h1>
          <hr>
            <h2><?php
                     if(isset($_SESSION['username']))
                     {
                         echo 'Welcome ' .$_SESSION['username'];
                     }   
            ?></h2>
                    <center>
                     <div class="bottuns">
                     <button class="emp"><a href="employeedetails.php"><img src="../icons/administrator.png" width="200" height="200" class="emp">Employees</a></button>
                     <button class="cubtn"><a href="customerdetails.php"><img src="../icons/target.png" width="200" height="200" >Customers</a></button>
                     <button class="inbtn"><a href="incidents.php"><img src="../icons/admin.png" width="200" height="200" >Incidents</a></button>
                     </div>
                    </center>


    </body>
</html>