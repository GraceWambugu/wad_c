<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Bloomberg Goat Farm</title>
    <link rel="stylesheet" href="css/styles.css">
<title>Bloomberg Goat farm</title>



 

<?include_once("template/navigation.php");?>
<div class ="background"></div>



</head>
<body>
    <nav class="navbar">
        <ul>
          
        <li><a href="">Home </a></li>
        <li><a href="">About </a></li>
        <li><a href="">products</a></li>
        <li><a href="">Contacts</a></li>
        <li><a href="">Sign up </a></li>
        <li><a href="">Sign in</a></li>

        </ul>

    </nav>
    <main>
        <h3>This is the home page</h3>
        <p>   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, error sequi consequuntur id modi ipsam debitis quis optio voluptatum laboriosam quidem ab deserunt. Suscipit quas, libero asperiores corporis laboriosam esse?</p>
    </main>
    <div class="bg-img">
        <form action="/action_page.php" class="container">
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" class="btn">Login</button>
        </form>
      </div>
      <?php include 'footer.php'; ?>

</body>
</html>
