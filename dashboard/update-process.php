<?php

include_once 'connect.php';


if(isset($_POST['update']))
{

    mysqli_query($conn,"UPDATE incident set description='" . $_POST['message'] ."'  where Incident_number= '" .$_POST['number']."' ");
    $message = "Record Modified Successfully";
    header("location:dashboard1.php");
    }
		mysqli_close($conn);
?>
