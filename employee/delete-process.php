<?php

    include_once '../dashboard/connect.php';


    $sql = "DELETE FROM answers WHERE incident_number='" . $_GET['incident_number'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:dashboard2.php");
    }
     else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>