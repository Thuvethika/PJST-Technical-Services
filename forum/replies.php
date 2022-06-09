<?php
//include config file
include_once '../dashboard/connect.php';

//Session
session_start();
if(!ISSET($_SESSION['username']))
{
    header("location:../login/login.php");
}

    $sql = "SELECT * FROM reply WHERE post_id = '" . $_GET['post_id'] . "'";
    $result=mysqli_query($conn,$sql);


   
    // Close connection
    mysqli_close($conn);

    

?>

<html>
    <head>
        <title>Replies</title>
        <link rel="stylesheet" type="text/css" href="forum.css">
    </head>
    <body>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="tables">
        
        <tr>
            <th>Reply ID</th>
            <th>Username</th>
            <th>Reply Content</th>
            <th>Time</th>
            <th>Post Id</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["reply_id"]; ?></td>
            <td><?php echo $row["reply_owner"]; ?></td>
            <td><?php echo $row["reply_text"]; ?></td>
            <td><?php echo $row["reply_create_time"]; ?></td>
            <td><?php echo $row["post_id"]; ?></td>

            <td>
            <?php echo "<a href='viewreply.php?reply_id=". $row['reply_id'] ."' title='View Reply'><img src='view.png'></a>"; ?>

            </td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        <?php
        }
        else{
        ?>
        <p>No replies to show</p>
        <?php
        }
        ?>
            <a href="discussion.php"><button class="detail" >Back</button></a><br ><br >

    </body>
</html>