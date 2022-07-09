<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Vaccination Record</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head>
<?php require('../db_con/connection.php');?>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                    <!--admin navigation-->
                 <div class="col" id="adminNav">
                    <script> 
                            $(function(){
                            $("#adminNav").load("admin_nav/adminNav.html");
                        });
                    </script>
                </div>
            </div>


            <div class="col">

                <div class="row">
                    <h5>User Record</h5>
                    <div class="Ucon" id="UCon" style=" background-color:C8C6C6; height:500px;width:900px;overflow:scroll;" >

                        <table>
                            <thead>
                                <th>UserID</th>
                                <th>Name</th>
                                <th>Birthday </th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            
                                            $query = mysqli_query($conn, "SELECT userID, CONCAT_WS(', ', fname, Lname, Mname) AS fullname,
                                                    birthday, age, sex, address, contactNo, emailAdd FROM user_T") or die ($conn->error);

                                            if(mysqli_num_rows($query)>0){
                                                while($content=mysqli_fetch_assoc($query)){ 
                                                    echo "{$content['userID']} {$content ['fullname']}  {$content['birthday']} 
                                                        {$content['age']} {$content['sex']} {$content['address']} {$content['contactNo']}
                                                        {$content['emailAdd']}";?> <br>
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


                <div class="row">
                    <h5>Vaccination Record</h5>
                    <div class="VCon" id="VCon" style=" background-color:C8C6C6; height:500px;width:900px;overflow:scroll;" >

                        <table>
                            <thead>
                                <th>vaxID</th>
                                <th>userID</th>
                                <th>vaccinationDate </th>
                                <th>vaccinationTime</th>
                                <th>dose</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            
                                            $query = mysqli_query($conn, "SELECT vaxID, userID, vaccinationDate, vaccinationTime
                                                               dose FROM vaxhist_T") or die ($conn->error);

                                            if(mysqli_num_rows($query)>0){
                                                while($content=mysqli_fetch_assoc($query)){ 
                                                    echo "{$content['vaxID']} {$content ['userID']}  {$content['vaccinationDate']} {$content['vaccinationTime']} {$content['dose']}";?> <br>
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
    </div>
</body>
</html>