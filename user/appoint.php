<?php

    require("../db_con/connection.php");

    //----------pag okay na yung schedule.php------------//

  /*  $center=$_POST['center'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $dose=$_POST['dose']
    $vax=$_POST['vaxIn'];
    

   mysqli_query($conn, "INSERT INTO appoint_T (userID, center, appointDate, appointTime, dose, vaccine) VALUES 
                ('$_SESSION[CurrUserID]', '$center', '$date', '$time', '$dose', '$vax')")
               or die($conn->error); */
    
   $conn->close();



?>
