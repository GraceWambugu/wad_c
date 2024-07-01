
<?php include server.php ?>
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
    <div class="bg-img">
        <form action="/action_page.php" class="container">
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="name"><b>Username</b></label>
          <input type="Name" placeholder="Enter Pname" name="name" required>
      
          <button type="submit" class="btn">Login</button>
        </form>
      </div>
      <form method="post" action="login.php">
  	
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