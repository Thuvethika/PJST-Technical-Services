<?php
    session_start();
    include_once '../dashboard/connect.php';


    if(isset($_POST['login']))
    {	 
        $query="select * from employee where employee_id='".$_POST['uname']."' and password='".$_POST['psw']."' and position='Employee'";
        $results2=mysqli_query($conn,$query);//for employees
        
        $sql3="select * from employee where employee_id='".$_POST['uname']."' and password='".$_POST['psw']."' and position='Admin'";
        $results3=mysqli_query($conn,$sql3);//for admin

        $sql="select * from customer where customer_id='".$_POST['uname']."' and password='".$_POST['psw']."' and position='customer'";
        $results=mysqli_query($conn,$sql);//for customers

        if(mysqli_fetch_assoc($results2))/*if reccord available under obove query following will execute*/
        {
            $_SESSION['username']=$_POST['uname'];/*assigning the value that entered by user to a variable call username in the SESSION */
            header("location:../employee/dashboard2.php");/*redirect to the dashboard*/
        }
        else if(mysqli_fetch_assoc($results))
        {
            $_SESSION['username']=$_POST['uname'];/*assigning the value that entered by user to a variable call username in the SESSION */
            header("location:../dashboard/dashboard1.php");/*redirect to the dashboard*/
        }
        else if(mysqli_fetch_assoc($results3))
        {
            $_SESSION['username']=$_POST['uname'];/*assigning the value that entered by user to a variable call username in the SESSION */
            header("location:../admin/dashboard3.php");/*redirect to the dashboard*/
        }
        else
        {
            header("location:login.php?Invalid=Please enter corect user name and password");
        }
    }

?> 
