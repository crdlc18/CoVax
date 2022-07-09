<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <title>Vaccination History</title>
</head>

<?php require('../db_con/connection.php');?>

<body>

<div class="vaxHistCon">
    <div class="row">
        <div class="col">
                    <!--user navigation-->
            <div class="col" id="userNav">
                <script> 
                        $(function(){
                        $("#userNav").load("user_nav/user_nav.html");
                     });
                </script>
            </div>
        </div>

        <div class="col">
            <div class="VCon" id="VCon" style=" background-color:C8C6C6; height:500px;width:900px;overflow:scroll;" >
                <table>
                    <thead>
                        <th>Vaccine Name</th>
                        <th>Vaccination Date </th>
                        <th>Vaccination Time</th>
                        <th>Dose</th>
                        <th>Next Shot</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <?php
                                    
                                    //di ko pa nachecheck if this is working
                                    $query = mysqli_query($conn, "SELECT vaxName, vaccinationDate, vaccinationTime
                                                    dose, nextShot FROM user_T UT JOIN vaxHist_T VHT ON UT.userID = VHT.userID
                                                    JOIN vax_T VT ON VHT.vaxID=VT.vaxID WHERE UT.userID='{$_SESSION['CurrUserID']}'") 
                                                    or die ($conn->error);

                                    if(mysqli_num_rows($query)>0){
                                        while($content=mysqli_fetch_assoc($query)){ 
                                            echo "{$content['vaccinationDate']} {$content['vaccinationDate']} 
                                                {$content ['vaccinationTime']}  {$content['dose']} {$content['nextShot']}";?> <br>
                                            <?php
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>   
                    </tbody>   
                </table>
            </div>
        </div>
    </div>
</div>