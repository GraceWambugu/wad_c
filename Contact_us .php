
<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $First_Name = $_POST['firstname'];
    $Last_Name = $_POST['lastname'];
    $Country = $_POST['country'];
    $Subject = $_POST['subject'];

    $sql = "INSERT INTO `users` (`First Name`, `Last Name`, `Country`, `Subject`)
            VALUES ('$First_Name', '$Last_Name', '$Country', '$Subject')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="Sign_in.php">Sign in</a></li>
        <li><a href="signup.php">signup</a></li>
        <li><a href="product.php">products</a></li>
        <li><a href="Contact_us.php">Contact us</a></li>
        <li><a href="about_us.php">About us</a></li>
        <li><a href="index.php">Home</a></li>
        <h1 class="logo">Bloom<span>Berg</span></h1>
    </ul>
</nav>

<div class="container my-5">
    <form action method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

        <label for="country">Country</label>
        <select id="country" name="country" required>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
