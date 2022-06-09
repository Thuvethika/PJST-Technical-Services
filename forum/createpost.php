<?php
// Include config file
include_once "../dashboard/connect.php";

//session
session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }
    


if(isset($_POST['submit']))
{	 
	 $username = $_SESSION['username'];
	 $post_title = $_POST['post_title'];
	 $post_text = $_POST['post_text'];
	 
	 $sql = "INSERT INTO posts (customer_id,post_title,post_text)
	 VALUES ('$username','$post_title','$post_text')";
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
        <title>Create Post</title>
        <link rel="stylesheet" type="text/css" href="forum.css">
    </head>
    <body>

    <a href="discussion.php"><button class="detail" >Back</button></a><br ><br >

        <div class="">
            <h1>Technical Support Community Forum</h1>
        </div>
        <div class="">
            <form action="createpost.php" method="POST">
                <label for="username"><b>Username</b></label><br >
                <input type="username" name="username" id="username" placeholder="Enter your username" value="<?php echo $_SESSION['username']; ?>"required><br >
            

                <label for="post_title"><b>Post Title</b></label><br >
                <input type="text" name="post_title" id="post_title" placeholder="Enter post title" required><br >

                <label for="post_text"><b>Post content</b></label><br >
                <textarea  rows="10" cols="60" name="post_text" id="post_text"  placeholder="Write Your post here" required></textarea><br >

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>