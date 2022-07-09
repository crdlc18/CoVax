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
    <title>Dashboard</title>
</head>

<?php require('../db_con/connection.php');?>


<body>

    <div class="dashCon">
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
                    <div class="col">
                        <h5>Number of  Fully Vaccinated Users<h5>
                        <?php
                            $query = mysqli_query($conn, "SELECT COUNT(*) AS vaccinated FROM user_T UT
                               JOIN vaxHist_T VT ON UT.userID= VT.userID WHERE dose='2nd Dose'") or die ($conn->error);
                            $data=mysqli_fetch_assoc($query);
                            echo "{$data['vaccinated']}";
                        ?>
                        
                    </div>

                    <div class="col">
                        <h5>Number of Users <h5>
                            <?php
                                 $query = mysqli_query($conn, "SELECT COUNT(*) AS tot_users FROM user_T") or die ($conn->error);
                                 $data=mysqli_fetch_assoc($query);
                                 echo "{$data['tot_users']}";
                            ?>
                    </div>

                    <div class="col">
                        <h5>Number of Vaccines</h5>
                        <?php
                            $query = mysqli_query($conn, "SELECT COUNT(*) AS tot_vax FROM vax_T") or die ($conn->error);
                            $data=mysqli_fetch_assoc($query);
                            echo "{$data['tot_vax']}";
                        ?>
                    </div>
                </div>

                <div class="row">
                    <h5>Vaccination Schedule</h5>
                    <div class="schedCon" id="schedCon" style=" background-color:C8C6C6; height:500px;width:900px;overflow:scroll;" >

                        <table>
                            <thead>
                                <th>Name of Center</th>
                                <th>Date</th>
                                <th>Time</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            $query = mysqli_query($conn, "SELECT nameOfCenter, schedDate, timeslot FROM sched_T") or die ($conn->error);

                                            if(mysqli_num_rows($query)>0){
                                                while($content=mysqli_fetch_assoc($query)){ 
                                                    echo "{$content['nameOfCenter']} {$content ['schedDate']}  {$content['timeslot']}";?> <br>
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