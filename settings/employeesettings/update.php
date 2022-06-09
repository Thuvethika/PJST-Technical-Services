<?php
    include_once 'database.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }

    $result = mysqli_query($conn,"SELECT * FROM customer where employee_id='".$_SESSION['username']."'");
    $row = mysqli_fetch_array($result);
?>

<html>
<head> 
<title> settings </title>
</head>
<body>

<center><h1> General Account Settings </h1></center>

<!--staus div-->
         <div class="details">
            <table class="details">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Address</th>
					<th>username</th>
                </tr>

                <?php
                        $result = mysqli_query($conn,"SELECT first_name,last_name,email,contact_no,address,username");
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details1">
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["contact_no"]; ?></td>
						<td><?php echo $row["address"]; ?></td>
						<td><?php echo $row["username"]; ?></td>
                   
                        <td><a href="update-process.php?username=<?php echo $row["employee_id"]; ?>">Edit</a></td>
                        </tr>
                    <?php
                        $i++;
						}
                    ?>

            </table>
			</div>
			</html>