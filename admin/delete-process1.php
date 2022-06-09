<?php

    include_once 'connect.php';
    $result = mysqli_query($conn,"SELECT * FROM employee");


    $sql = "DELETE FROM employee WHERE employee_id='" . $_GET['employee_id'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:employeedetails.php");
    }
     else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>