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
        <title>customerDashboard</title>
        <link rel="stylesheet" type="text/css" href="../dashboard/dashboard.css">
        <style>body{background-image: url('../home/images/bg3.jpg');}</style>
        <script src="../dashboard/dashboard1.js"></script>
    </head>

    <body class="body1">

    <a href="dashboard3.php"><button class="detail" >Back</button></a><br ><br >
         <!--staus div-->
         <div class="details1">
            <table class="details">
                <tr>
                    <th>Customer ID</th>
                    <th>Problem</th>
                    <th>Description No</th>
                    <th>Employee ID</th>
                    <th>Status</th>
                </tr>

                <?php
                        $result = mysqli_query($conn,"SELECT customer_id,problem,description,incident_number FROM incident");
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details2">
                        <td><?php echo $row["customer_id"]; ?></td>
                        <td><?php echo $row["problem"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <?php 
                                $result3 = mysqli_query($conn,"SELECT status,employee_id FROM answers where incident_number='".$row["incident_number"]."'");
                                $row3 = mysqli_fetch_array($result3);
                        
                            ?>
                        <td><?php echo $row3["employee_id"]; ?></td>
                        <td><?php echo $row3["status"]; ?></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>

            </table>

           
          <!--update form-->
        <div  id="update" class="form-popup">

            <form action="update-process.php" method="POST" class="container1" id="myForm2">
            <h1>Update Permission</h1>
            <hr>

                            <label for="no"><b>Employee Id</b></label>
                            <input type="text"  name="eid" id="eid" placeholder="Employee id">

                            <label for="pos"><b>Position</b></label>
                            <input type="text" placeholder="Enter the position" name="pos" id="pos" required> 
                
                            <hr>
                
                            <button type="submit" class="registerbtn" name='update'>Submit</button>
                            <button type="button" class="btncancel" onclick="closeupdateform()">Close</button>


            </form>

        </div> 

    </body>
    </html>