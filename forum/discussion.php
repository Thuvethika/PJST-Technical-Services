<?php
include_once '../dashboard/connect.php';

//Session
session_start();
if(!ISSET($_SESSION['username']))
{
    header("location:../login/login.php");
}

$result = mysqli_query($conn,"SELECT * FROM posts");
?>

<html>
    <head>
        <title> Technical Support Community Forum Discussions</title>
        <link rel="stylesheet" type="text/css" href="discussion.css">
        <script>
            function openNav() {
                    document.getElementById("Sidepanel1").style.width = "250px";
                }
                
                function closeNav() {
                    document.getElementById("Sidepanel1").style.width = "0";
                }
        </script>
        <link rel="stylesheet" type="text/css" href="forum.css">
    </head>
    <body>

    

    <!--sidepannel-->
    <div id="Sidepanel1" class="sidepanel">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            <a href="../home/layout2.php">Home</a>
            <a href="../dashboard/dashboard1.php">Dashboard</a>
            <a href="../dashboard/incident.php">Incidents</a>
            <a href="../FAQ/faqs.html">FAQs</a>
            <a href="../Tutorial/tutorials.html">Tutorials</a>
            <a href="discussion.php">Community Forum</a>
            <a href="../settings/settings.php">Settings</a>
            <hr>
            <?php 
             if(ISSET($_SESSION['username']))
             {
                echo '<a href="../login/logout.php?logout">Logout</a>';
             } ?>
          </div>
          <button class="openbtn" onclick="openNav()">☰ Menu</button> 

        <div>
        <a href="myposts.php"><button>My Posts</button></a>
        <a href="createpost.php"><button>Create Posts</button></a>

        </div>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
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
        <?php
        }
        else{
        ?>
        <p>No result found</p>
        <?php
        }
        ?>
    </body>
</html>