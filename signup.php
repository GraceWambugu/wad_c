<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css">

</head>
<body>
    
<nav class="navbar">
<ul>
          
          <li><a href="Sign in.php">Sign in </a></li>
          <li><a href="signup.php">signup </a></li>
          <li><a href="product.php">products</a></li>
          <li><a href="Contact_us .php">Contacts</a></li>
          <li><a href="about us.php">About us </a></li>
          <li><a href="index.php">Home</a></li>
          <h1 class="logo">Bloom<span>Berg</span>  </h1>
          </ul>

    </nav>
 
   

    <form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>