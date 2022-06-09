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
        <title>Customer details</title>
        <link rel="stylesheet" type="text/css" href="../dashboard/dashboard.css">
        <style>body{background-image: url('../home/images/bg3.jpg');}</style>

        <script src="../dashboard/dashboard1.js"></script>
    </head>

    <body class="body1">

    <a href="dashboard3.php"><button class="detail" >Back</button></a><br ><br >

        <!--create button-->
        <button class="createbtn" onclick="openForm()">Add Customer</button>

<!--create form-->
<div class="container" id="myForm">

  <form action="process4.php" method="POST">
      <h1>Add Customer</h1>
      <hr>
              
        <label for="cid"><b>Customer_id</b></label>
        <input type="text" placeholder="Enter User Name" name="cid" id="cid" required>
	
	    <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>

	    <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>

        <label for="contact"><b>Contact No</b></label>
        <input type="text" placeholder="Enter Contact no" name="cno" id="cno" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" id="address" required>

        <label for="psw"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="psw" id="psw" required>
             
      <hr>
  
      <button type="submit" class="registerbtn" name='save'>Submit</button>
      <button type="button" class="btncancel" onclick="closeForm()">Close</button>
  </form>
</div> 

         <!--staus div-->
         <div class="details1">
            <table class="details">
                <tr>
                    <th>Customer_id</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Action1</th>
                </tr>

                <?php
                        $result = mysqli_query($conn,"SELECT customer_id,email,contact_no FROM customer");
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details2">
                        <td><?php echo $row["customer_id"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["contact_no"]; ?></td>
                        <td><a href="delete-process.php?customer_id=<?php echo $row["customer_id"]; ?>"><button class="detail">Delete</button></a></td>
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