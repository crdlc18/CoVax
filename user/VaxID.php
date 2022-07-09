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
    <title>Vaccination ID</title>
</head>
<?php require('../db_con/connection.php');?>
<body>
<div class="vaxIDCon">
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
            <div class="row">
                <h2>Hello <?php echo"{$_SESSION['CurrUserFN']}"?></h2>
            </div>

            <div class="row">
                <h3>Vaccination ID</h3>
                
                <?php 
                        //query vaxHist_T to get the dose for status WHERE userID= $_SESSION['CurrUserID']
                ?>
                    
                <h3> Name: <?php echo"{$_SESSION['CurrUserFN']}  {$_SESSION['CurrUserMN']} {$_SESSION['CurrUserLN']}"?></h3>
                <h3> Status: <h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>