
<?php 
include('process-form.php');

if(isset($_POST['submit'])){
 
  include('process-form.php');
  
  if(isset('process-from.php'));
  $name=$_POST['name']
  $name=$_POST['']
  $name=$_POST['name']
  $name=$_POST['name']
  
    
}
else {}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Document</title>
</head>

<body>
    
<nav class="navbar">
<ul>
          
          <li><a href="Sign in.php">Sign in </a></li>
          <li><a href="signup.php">signup </a></li>
          <li><a href="product.php">products</a></li>
          <li><a href="Contact us .php">Contacts</a></li>
          <li><a href="about us.php">About us </a></li>
          <li><a href="index.php">Home</a></li>
          <h1 class="logo">Bloom<span>Berg</span>  </h1>
          </ul>
    </nav>
    
      <form  action= "preocess-form.php" method="post"></form>
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
</body>
</html>