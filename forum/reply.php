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

if(isset($_POST['submit']))
{	 
	 $reply_owner = $_POST['reply_owner'];
     $reply_text = $_POST['reply_text'];
     $post_id = $_POST['post_id'];
	 
	 $sql = "INSERT INTO reply (reply_owner,reply_text,post_id)
	 VALUES ('$reply_owner','$reply_text','$post_id')";
	 if (mysqli_query($conn, $sql)) {

        header("location: discussion.php");
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<html>
    <head>
        <title>Reply to Post ID <?php echo $row['post_id']?></title>
        <link rel="stylesheet" type="text/css" href="forum.css">
    </head>
    <body>
        <div class="">
            <h1><?php echo $row['post_title']?></h1>
            <p><?php echo $row['post_text']?></p>
        </div>
        <div class="">
            <form action="reply.php" method="POST">
                    <label for="reply_owner"><b>Username</b></label><br >
                    <input type="username" name="reply_owner" id="reply_owner" placeholder="Enter your username " value="<?php echo $_SESSION['username']; ?>" required><br >
                
                    <label for="reply_text"><b>Post content</b></label><br >
                    <textarea  rows="10" cols="60" name="reply_text" id="reply_text"  placeholder="Write Your reply here" required></textarea><br >

                    <input type="hidden" name="post_id" id="post_id" value="<?php echo $row['post_id']?>">
                    <button type="submit" name="submit">Submit</button>
            </form>
        </div>
       
    </body>
</html>