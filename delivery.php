<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Delivery style.css"> 
</head>

<div class="header">
    <h1>Delivery</h1>
    <h4>Yes!we can deliver to your door step</h4>
  </div>
</div>
<body>
  <style>
    body {
      background-image: url("img/farm.jpeg");
      background-size: cover; 
      background-position: center; 
     
    }
    </style>  
   <table>
    <tr>
      <th>Company</th>
      <th>Contact</th>
      <th>Country</th>
    </tr>
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Centro comercial Moctezuma</td>
      <td>Francisco Chang</td>
      <td>Mexico</td>
    </tr>
  </table> 
  <?php include 'footer.php'; ?>
</body>
<h1>Delivery Details</h1>
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
</html>
