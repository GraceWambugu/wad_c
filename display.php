<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <div class ="container">

<button class="btn btn-primary my-5"><a a href="signup.php"class="text-light">Add user</a></button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Repeat Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 

  $sql="Select *from `signup`";
  $result=mysqli_query($con,$sql);
  if($result){
    $row=mysqli_fetch_assoc($result);
    echo$ $row ['name'];
  }
  ?>
 
  </tbody>
</table>




    </div>

</body>
</html>