<?php
include_once '../dashboard/connect.php';

//Session
session_start();
if(!ISSET($_SESSION['username']))
{
    header("location:../login/login.php");
}

$result = mysqli_query($conn,"SELECT * FROM posts WHERE customer_id = '".$_SESSION['username']."' ");

?>
<html>
    <head>
        <title>My Posts</title>
        <link rel="stylesheet" href="forum.css">
    </head>
    <body>
    <a href="discussion.php"><button class="detail" >Back</button></a><br ><br >
        <h1>Posts by <?php echo $_SESSION["username"]; ?></h1>
        
        <table class="tables">
        
        <tr>
            <th>Post ID</th>
            <th>Username</td>
            <th>Post Title</th>
            <th>Post Content</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["post_id"]; ?></td>
            <td><?php echo $row["customer_id"]; ?></td>
            <td><?php echo $row["post_title"]; ?></td>
            <td><?php echo $row["post_text"]; ?></td>
            <td>
            <?php echo "<a href='view.php?post_id=". $row['post_id'] ."' title='View Record'><img src='view.png'></a>"; ?>
            <?php echo "<a href='reply.php?post_id=". $row['post_id'] ."' title='Reply'><img src='reply.png'></a>"; ?>

            </td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        
    </body>
</html>