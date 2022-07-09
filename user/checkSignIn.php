<?php


   require("../db_con/connection.php");


    $passIn=$_POST['passIn'];
    $emailIn=$_POST['emailIn'];
    
    
    
    //queries the database if input email exists
    $query = mysqli_query($conn, "SELECT userID, fName, Lname, Mname, password FROM user_T WHERE emailAdd = '$emailIn'");
  

    if(mysqli_affected_rows($conn)>0){ 

        $item=mysqli_fetch_array($query);
        $passwrd=$item['password'];
        $_SESSION['CurrUserFN'] = $item['fName'];
        $_SESSION['CurrUserLN'] = $item['Lname'];
        $_SESSION['CurrUserMN'] = $item['Mname'];
        $_SESSION['CurrUserID']= $item['userID'];
        
      if($passIn==$passwrd){
        echo "matched";
        
      }
      else{
        echo "notMatched";
      }
         
    }
    else{
      echo "noRec";  
    }

    $conn->close();

?>