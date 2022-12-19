<?php
    $con = new mysqli('localhost','root', '','usercrud');

    if(!$con) {
        die(mysqli_error($con));   
    }

?>