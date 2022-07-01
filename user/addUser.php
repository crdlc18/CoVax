<?php

    require("../db_con/connection.php");


    $bdate=$_POST['bdate'];
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Mname=$_POST['mname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['add'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];


  
    
   // mysqli_query($conn, "INSERT INTO user_T (fName, Lname, Mname, birthday, age, sex, address, contactNo,emailAdd) VALUES 
              //  ('$Fname', '$Lname', '$Mname', '$bdate', '$age', '$gender', '$address', '$contact', '$email')") or die($conn->error); 
    
   $conn->close();



?>
