<?php
include 'dbconn.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql= "DELETE from users where id=$id";
    $result =mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successful";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    
    }
}

?>