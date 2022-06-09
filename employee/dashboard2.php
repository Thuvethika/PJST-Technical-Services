<?php
    include_once '../dashboard/connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }
    
?>

<html>
    <head>
        <title>employeeDashboard</title>
        <link rel="stylesheet" type="text/css" href="dashboard3.css">
        <script src="dashboard2.js"></script>
        <style>body{background: url('../home/images/bg3.jpg');}</style>
    </head>

    <body class="body1">

         <!--sidepannel-->
        <div id="Sidepanel1" class="sidepanel">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            
            <a href="dashboard2.php">Dashboard</a>
            <a href="incidents.php">Incidents</a>
            <a href="../FAQ/faqs.html">FAQs</a>
            <a href="../Tutorial/tutorials.html">Tutorials</a>
            <a href="settings2.php">Settings</a>
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
 
          <!--staus div-->
        <div class="details1">
            <table class="details">
                <tr>
                    <th>Incident NO </th>
                    <th>Customer</th>
                    <th>Problem</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action1</th>
                    <th>Action2</th>
                </tr>

                <?php
                        $result = mysqli_query($conn,"SELECT * FROM incident");
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details2">
                        <td><?php echo $row["incident_number"]; ?></td>
                        <td><?php echo $row["customer_id"]; ?></td>
                        <td><?php echo $row["problem"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td>

                            <?php 
                                $result3 = mysqli_query($conn,"SELECT status FROM answers where incident_number='".$row["incident_number"]."' ");
                                $row3 = mysqli_fetch_array($result3);
                                echo $row3["status"];

                            ?>

                        </td>        
                        <td><a href="delete-process.php?incident_number=<?php echo $row["incident_number"]; ?>"><button class="detail">Delete</button></a></td>
                        <td><script src="updateform2.js"></script><button class="detail" onclick="updateform()">Answer</button></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>

            </table>

          <!--update form-->
        <div  id="update" class="form-popup">
                            <?php
                            
                                $no1 = mysqli_query($conn,"SELECT * FROM incident");
                                $row1 = mysqli_fetch_array($no1);
                                
                                
                            ?>
            <form action="process.php" method="POST" class="container1" id="myForm2">
            <h1>Incident</h1>
            <hr>

                            <label for="no"><b>Employee Id</b></label>
                            <input type="text" placeholder="user name" name="uname" id="uname" value="<?php echo $_SESSION['username']; ?> ">
                            
                            <label for="no"><b>Incident No</b></label>
                            <input type="text" placeholder="user name" name="no" id="no" placeholder="Ener the incident number">

                            <label for="no"><b>Customer_id</b></label>
                            <input type="text" placeholder="user name" name="cname" id="cname" placeholder="Ener the Cutomer Id">

                            <label for="Answer"><b>Answer</b></label>
                            <textarea  rows="10" cols="60" name="message" id="message"  placeholder="Write Your answer here"></textarea>

                            <hr>
                
                            <button type="submit" class="registerbtn" name='save'>Submit</button>
                            <button type="button" class="btncancel" onclick="closeupdateform()">Close</button>
            </form>
                            

        </div> 


    </body>
</html>