<?php

$un= $_POST['un'];
$pass=$_POST['pass'];

if($un=='admin' && $pass=='4dmIn'){
    echo "valid";

}
else{

    echo "invalid";
}


?>