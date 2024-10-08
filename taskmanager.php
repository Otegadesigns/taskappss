<?php
include 'dbconn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pwd=$_POST['pwd'];
    
    $sql="INSERT INTO users(name,email, mobile,pwd) VALUES ('$name', '$email','$mobile','$pwd')";
    $result=mysqli_query($con,$sql);
    
    if($result){
        //echo"Data inserted successfully";
        header('location:display.php');
    
    }else{
        die(mysqli_error($con));
    }

}
?>