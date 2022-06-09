<?php
include_once '../dashboard/connect.php';



if(isset($_POST['save']))
{	 
	/*print_r($_POST);*/
	 $uname = $_POST['uname'];
	 $no=$_POST['no'];
	 $cname = $_POST['cname'];
	 $stat='assign';
	 $answer =trim($_POST['message']);
	 $sql = "INSERT INTO answers (employee_id,incident_number,customer_id,status,answer)
     VALUES ('$uname','$no','$cname','$stat','$answer')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:dashboard2.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>


