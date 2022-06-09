<?php
//include config file
include_once '../dashboard/connect.php';
//Session
session_start();
if(!ISSET($_SESSION['username']))
{
    header("location:../login/login.php");
}

$sql = "SELECT * FROM reply WHERE reply_id = '" . $_GET['reply_id'] . "'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
    
    // Close connection
    mysqli_close($conn);

?>

<html>
    <head>
        <title>Reply ID <?php echo $row['reply_id']?></title>
        <link rel="stylesheet" href="forum.css">
    </head>
    <body>
        <div class="">
            <p><?php echo $row['reply_id'] ?></p>
            <p>Created by: <?php echo $row['reply_owner']?> on <?php echo $row['reply_create_time'] ?></p>
            <p><?php echo $row['reply_text']?></p>
            

        </div>
        <div>
            <p>
            
            </p>
        </div>
    </body>
</html>