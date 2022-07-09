<?php

    require("../db_con/connection.php");


    $center=$_POST['center'];
    $time=$_POST['time'];
    $date=$_POST['schedDate'];
    

    
  mysqli_query($conn, "INSERT INTO sched_T (nameOfCenter, timeslot, schedDate) VALUES 
            ('$center','$time', '$date')" ) or die($conn->error); 
    
   $conn->close();

?>