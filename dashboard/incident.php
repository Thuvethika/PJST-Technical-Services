<?php
    include_once 'connect.php';
    session_start();
    if(!ISSET($_SESSION['username']))
    {
        header("location:../login/login.php");
    }

    $result = mysqli_query($conn," SELECT i.incident_number,a.status,a.answer,date,problem,description FROM incident i,answers a WHERE i.incident_number=a.incident_number AND i.customer_id='".$_SESSION['username']."' ORDER BY i.incident_number,a.status,a.answer;");
?>



<html>
    <head>
        <title>customerIncidents</title>
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script src="dashboard1.js"></script>
        <style>body{background: url('../home/images/bg3.jpg');}</style>
    </head>

    <body class="body1">

         <!--sidepannel-->
        <div id="Sidepanel1" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="../home/layout2.php">Home</a>
            <a href="dashboard1.php">Dashboard</a>
            <a href="incident.php">Incidents</a>
            <a href="../FAQ/faqs.html">FAQs</a>
            <a href="../Tutorial/tutorials.html">Tutorials</a>
            <a href="../forum/discussion.php">Community Forum</a>
            <a href="../settings/settings.php">Settings</a>
            <hr>
            <?php 
             if(ISSET($_SESSION['username']))
             {
                echo '<a href="../login/logout.php?logout">Logout</a>';
             } ?>
          </div>
          
          <button class="openbtn" onclick="openNav()">☰ Menu</button>  

          <h1 class="h1c">Incidents</h1>
          <hr>

            <h2><?php
                     if(isset($_SESSION['username']))
                     {
                         echo 'Hello ' .$_SESSION['username'];
                     }   
            ?></h2>

          <!--staus div-->
        <div class="details1">
            <table class="details">
                <tr>
                    <th>Incident NO </th>
                    <th>Problem</th>
                    <th>Description</th>
                    <th>Answers</th>
                    <th>Status</th>
                    <th>Action1</th>
                </tr>

                <?php
                        $i=0;
                        if($result!= NULL)
                    {
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="details2">
                        <td><?php echo $row["incident_number"]; ?></td>
                        <td><?php echo $row["problem"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["answer"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>
                        <td><a href="delete-process.php?incident_number=<?php echo $row["incident_number"]; ?>"><button class="detail">Delete</button></a></td>
                        </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                        ?>
                        <tr class="details2">
                        <td><?php echo 'Empty'?></td>
                        <td><?php echo 'Empty'?></td>
                        <td><?php echo 'Empty'?></td>
                        <td><?php echo 'Empty'?></td>
                        <td><?php echo 'Empty'?></td>
                        <td><?php echo 'Empty'?></td>
                        </tr>
                    <?php
                    }

                    ?>

            </table>

    </body>
</html>