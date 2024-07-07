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
        <li><a href="Contact us .php">Contacts</a></li>
        <li><a href="about us.php">About us </a></li>
        <li><a href="index.php">Home</a></li>
        <h1 class="logo">Bloom<span>Berg</span>  </h1>
        </ul>

    
  
</nav>



    </div>
    <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>
<?php include 'footer.php'; ?>