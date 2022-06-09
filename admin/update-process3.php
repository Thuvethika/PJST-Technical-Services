<?php

include_once 'connect.php';


if(isset($_POST['update']))
{

    mysqli_query($conn,"UPDATE employee set employee_id='" . $_POST['eid'] ."', position= '" .$_POST['pos']."' where employee_id= '" .$_POST['eid']."' ");
    $message = "Record Modified Successfully";
    header("location:employeedetails.php");
    }
		mysqli_close($conn);
?>
