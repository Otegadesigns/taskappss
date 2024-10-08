<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  </head>
  <body>
        <div class="container my-5">
        <form method="post" action="taskmanager.php">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value= "">
      </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" >
          </div>
          <div class="form-group">
        <label>mobile</label>
        <input type="text" class="form-control" placeholder="enter your number" name="mobile" autocomplete="off" value="">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="enter your password" name="pwd" value="">
      </div>
      <br>

  
  <button type="submit" name="submit" class="btn btn-primary">update</button>
</form>
    </div>
    
  </body>
</html>
<?php
    include 'dbconn.php';
    $id=$_GET['updateid'];
    $sql= "SELECT * from users where id=$id ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name =$row['name'];
    $email =$row['email'];
    $mobile=$row['mobile'];
    $pwd=$row['pwd'];
    
    
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pwd=$_POST['pwd'];
    
    $sql="UPDATE users set id=$id name='$name', email='$email', mobile='$mobile',
    pwd='$pwd' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Record update successfully";
    }
    
}
?>