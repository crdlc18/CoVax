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
    $pass=$_POST['pass'];


    
   //mysqli_query($conn, "INSERT INTO user_T (fName, Lname, Mname, birthday, age, sex, address, contactNo,emailAdd,password) VALUES 
              //  ('$Fname', '$Lname', '$Mname', '$bdate', '$age', '$gender', '$address', '$contact', '$email', '$pass')") or die($conn->error); 
    
   $conn->close();



?>
