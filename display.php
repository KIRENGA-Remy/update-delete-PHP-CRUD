<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Display Users</title>
</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"><a href="users.php" class="text-light">Add User</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>

  <?php
  $sql="select * from `users`";
  $result=mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $firstName=$row['firstName'];
        $lastName=$row['lastName'];
        $Email=$row['Email'];
        $password=$row['password'];
        $gender=$row['gender'];

        echo ' 
        <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$firstName.'</td>
          <td>'.$lastName.'</td>
          <td>'.$Email.'</td>
          <td>'.$password.'</td>
          <td>'.$gender.'</td>
          <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

          <form method="post" action="export.php">
          <button  type="submit" name="csv" class="btn btn-dark">Exp CSV</button>
          <button  type="submit" name="pdf" class="btn btn-success">Exp PDF</button>
          </td>
        </tr>';
    }
  }
  ?>
</table>
</div>
</body>
</html>