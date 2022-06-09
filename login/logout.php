<?php
    session_start();
    if(ISSET($_GET['logout']))
    {
        session_destroy();
        header("location:../home/layout.php");
    }

?>