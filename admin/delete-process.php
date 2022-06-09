<?php

    include_once 'connect.php';
    $result = mysqli_query($conn,"SELECT * FROM customer");


    $sql = "DELETE FROM customer WHERE customer_id='" . $_GET['customer_id'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:customerdetails.php");
    }
     else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>