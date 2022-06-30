<?php

    require("../db_con/connection.php");

   
    $vname =$_POST['vaxName'];
    $quantity=$_POST['qty'];

   

    $query = mysqli_query($conn, "SELECT vaxID FROM vax_T WHERE vaxName = '$vname'");
    $total_rows = mysqli_affected_rows($conn); //get the result from the query

    //insert the new vaccine if it's not on the record yet
    if($total_rows == 0){ 
       mysqli_query($conn, "INSERT INTO vax_T (vaxName, quantity) VALUES ('$vname', '$quantity')"); 
     
    }

    //update the quantity of vaccine
    else{
       mysqli_query($conn, "CALL updateVax('$vname', '$quantity')");

    }
   

    $conn->close();

?>