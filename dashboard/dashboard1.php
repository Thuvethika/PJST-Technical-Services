<?php
    include_once 'connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }

    $result = mysqli_query($conn,"SELECT * FROM incident where customer_id='".$_SESSION['username']."'");
?>



<html>
    <head>
        <title>customerDashboard</title>
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script src="dashboard1.js"></script>
        <style>body{background: url('../home/images/bg3.jpg');}</style>
    </head>

    <body class="body1">

         <!--sidepannel-->
        <div id="Sidepanel1" class="sidepanel">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            <a href="../home/layout2.php">Home</a>
            <a href="dashboard1.php">Dashboard</a>
            <a href="incident.php">Incidents</a>
            <a href="../FAQ/faqs.html">FAQs</a>
            <a href="../Tutorial/tutorials.html">Tutorials</a>
            <a href="../forum/discussion.php">Community Forum</a>
            <a href="../settings/settings.php">Settings</a>
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
          <!--create button-->
          <button class="createbtn" onclick="openForm()">Create</button>

          <!--create form-->
          <div class="container" id="myForm">

            <form action="process.php" method="POST">
                <h1>Incident</h1>
                <hr>
                        
                <label for="uname"><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="uname" id="uname"  value="<?php echo $_SESSION['username']; ?>" required>

                <label for="problem"><b>Problem</b></label>
                <input type="text" placeholder="Enter Your Problem" name="problem" id="problem">
            
                <label for="description"><b>Description</b></label>
                <textarea  rows="10" cols="60" name="message" id="message"  placeholder="Write Your problem here"></textarea>
            
                <hr>
            
                <button type="submit" class="registerbtn" name='save'>Submit</button>
                <button type="button" class="btncancel" onclick="closeForm()">Close</button>
            </form>
          </div> 

          <!--staus div-->
        <div class="details1">
            <table class="details">
                <tr>
                    <th>Incident NO </th>
                    <th>Date</th>
                    <th>Problem</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action1</th>
                    <th>Action2</th>
                </tr>

                <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details2">
                        <td><?php echo $row["incident_number"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
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
                        <td><script src="updateform1.js"></script><button class="detail" onclick="updateForm()">Update</button></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>

            </table>

          <!--update form-->
        <div  id="update" class="form-popup">

            <form action="update-process.php" method="POST" class="container1" id="myForm2">
                     <h1>Incident</h1>
                         <hr>

                            <label for="no"><b>Incident Number</b></label>
                            <input type="text"  name="number" id="number" placeholder="Incident no">

                            <label for="description"><b>Description</b></label>
                            <textarea  rows="10" cols="60" name="message" id="message"  placeholder="Write Your problem here"></textarea>
                
                            <hr>
                
                            <button type="submit" class="registerbtn" name='update'>Submit</button>
                            <button type="button" class="btncancel" onclick="closeupdateform()">Close</button>


            </form>

        </div> 


    </body>
</html>