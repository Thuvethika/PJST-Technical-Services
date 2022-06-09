<?php

    include_once 'connect.php';
    $result = mysqli_query($conn,"SELECT * FROM incident");


    $sql = "DELETE FROM incident WHERE incident_number='" . $_GET['incident_number'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:dashboard1.php");
    }
     else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>