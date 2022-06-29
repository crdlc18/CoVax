<?php
/*--------------DATABASE CONNECTION----------------*/
    

    define('LOCALHOST','localhost:3307');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','admin');
    define('DB_NAME','covaxdb');

    $conn = new mysqli(LOCALHOST, DB_USERNAME , DB_PASSWORD, DB_NAME)
    or die("Error" . mysqli_error($conn));
?>