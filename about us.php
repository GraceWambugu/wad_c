<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
   
    <div class="header">
  
    <style>

body {
            background-color: rgb(239, 246, 240); /* Set the background color to light blue */
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #121212;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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

<p> We take transpaeny with our customers very personally ,therefore we let them get a glimpse of our goat production scale,Below is a reperesentation of some of the specie we keep in our goat farm alongside the milk production we get </p>



    <table>
        <thead>
            <tr>
                <th>Breed</th>
                <th>Weight Range (kg)</th>
                <th>Average Milk Production (liters/day)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alpine</td>
                <td>60-75</td>
                <td>2-4</td>
            </tr>
            <tr>
                <td>Saanen</td>
                <td>65-80</td>
                <td>3-5</td>
            </tr>
            <tr>
                <td>Nubian</td>
                <td>60-70</td>
                <td>1-3</td>
            </tr>
            <tr>
                <td>Toggenburg</td>
                <td>55-70</td>
                <td>2-3</td>
            </tr>
            <tr>
                <td>LaMancha</td>
                <td>50-65</td>
                <td>2-3</td>
            </tr>
            <tr>
                <td>Oberhasli</td>
                <td>55-65</td>
                <td>2-3</td>
            </tr>
            <tr>
                <td>Nigerian Dwarf</td>
                <td>20-35</td>
                <td>1-2</td>
            </tr>
            <tr>
                <td>Boer (meat breed)</td>
                <td>80-100</td>
                <td>Low milk production, primarily for meat</td>
            </tr>
        </tbody>
    </table>
</body>

<div class ="background"></div>
</html>
<?php include 'footer.php'; ?>
<div class="content">
    <h1>Talk To Us</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
        <label for="Fn">Fullname:</label><br>
        <input type="text" name="fullname" id="Fn" placeholder="Fullname" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email_address" placeholder="Email address" required><br><br>
        
        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select>
        <br><br>
    <label for="ms">Message:</label><br>
    <textarea cols="30" rows="7" name="message" id="ms" required></textarea><br><br>
    <input type="submit" name="send_message" value="Send Message" >
</form>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="about us.php">About us</a>
  <a href="Contact us .php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">sign up
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="signup.php">sign up</a>
      <a href="Sign in.php">Log in</a>
     
    </div>
  </div>
  <a href="product.php">prosucts</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

    </div>