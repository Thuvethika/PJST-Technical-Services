<?php

    session_start();
    include_once '../dashboard/connect.php';
    $result = mysqli_query($conn,"SELECT * FROM customer");


    $sql = "DELETE FROM customer WHERE customer_id='".$_SESSION['username']."'";
    if (mysqli_query($conn, $sql)) {
        header("location:../home/layout.php");
    }
     else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>