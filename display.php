<?php include 'dbconn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5" >
        <a href="user.php" class="text-light">  Add Task</a>
        

        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql= "SELECT * from users";
        $result= mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $pwd=$row['pwd'];
                echo'<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                 <td>'.$pwd.'</td>
                 <td>
                     <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                     <button class="btn btn-danger"  ><a href="del.php? deleteid='.$id.' "class="text-light">Delete</a></button>
                    
  
                  </td>
        
                </tr>';
                
            }
        }
        
    
    
    ?>
  
  
  
  
  
  </tbody>
</table>
    </div>
</body>
</html>