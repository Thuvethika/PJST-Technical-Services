<?php
//include config file
include_once '../dashboard/connect.php';
//Session
session_start();
if(!ISSET($_SESSION['username']))
{
    header("location:../login/login.php");
}

$sql = "SELECT * FROM posts WHERE post_id = '" . $_GET['post_id'] . "'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
    
    // Close connection
    mysqli_close($conn);

?>

<html>
    <head>
        <title>Post ID <?php echo $row['post_id']?></title>
        <link rel="stylesheet" href="forum.css">
    </head>
    <body>
        <div class="">
            <h1><?php echo $row['post_title']?></h1>
            <p>Created by: <?php echo $row['customer_id']?> on <?php echo $row['post_create_time'] ?></p>
            <p><?php echo $row['post_text']?></p>
            <?php echo "<a href='replies.php?post_id=". $row['post_id'] ."' title='View Record'><button type='button'>See Replies</button></a>"; ?>
            

        </div>
        <a href="discussion.php"><button class="detail" >Back</button></a><br ><br >

    </body>
</html>