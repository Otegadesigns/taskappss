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
        <input type="text" class="form-control" placeholder="enter your name" name="name">
      </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
          </div>
          <div class="form-group">
        <label>mobile</label>
        <input type="text" class="form-control" placeholder="enter your number" name="mobile">
      </div>
      <div class="form-group">
        <label>Task </label>
        <input type="textarea" class="form-control" placeholder="Enter your Task" name="pwd">
      </div>
      <br>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    
  </body>
</html>