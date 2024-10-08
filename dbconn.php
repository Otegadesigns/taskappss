<?php
$con= new mysqli('localhost', 'root', '','taskcrud');

    if(!$con){
        die(mysqli_error($con));    
    }



?>