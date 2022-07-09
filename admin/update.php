<?php

    require("../db_con/connection.php");

    /*
    $userID=$_POST['userID'];
    $dose=$_POST['dose'];
    


    $query = mysqli_query($conn, "SELECT * FROM vaxHist_T WHERE userID = '$userID'");


    if(mysqli_affected_rows($conn)>0){

        // query yung appoint_T pero yung recent vaccine name ang istore since 1:M yung user at appoint_t then store to variables
        $query = mysqli_query($conn, "SELECT appointedDate, appointedTime, vaccine FROM appoint_T WHERE userID = '$userID'");
      
        $apTime 
        $apDate
        $vaxName
        
        //query vax_T to get the vax ID where appointed vaccineName= vaccine name in vax_T and store to $vaxID
      
        $vaxID
       
        // $nextShot= appointment date + 22(?) days;

        mysqli_query($conn, "INSERT INTO vaxHist_T (vaxID, userID, vaccinationDate, 
                        vaccinationTime, dose, nextShot) VALUES ('$vaxID', '$userID', '$apDate', '$apTime',
                         '$dose', '$nextShot')" ) 
                        or die($conn->error); 
        echo "done";

    }
    else{
        echo "noRec";
    }
    */


    $conn->close();

?>