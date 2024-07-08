<?php 
include 'connect.php'; 

// Check if updateid parameter is set in the URL
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];

    // Check if the form has been submitted
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatpassword = $_POST['passwordrepeat'];

        // Ensure the ID is an integer to prevent SQL injection
        $id = (int)$id;

        // Update query (excluding passwordrepeat if it's not in your table)
        $sql = "UPDATE `signup` SET name='$name', email='$email', password='$password' WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "Data updated successfully";
        } else {
            die(mysqli_error($con));
        }
    }
} else {
    echo "No updateid parameter specified";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="Sign_in.php">Sign in</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="contact_us.php">Contacts</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="index.php">Home</a></li>
            <h1 class="logo">Bloom<span>Berg</span></h1>
        </ul>
    </nav>

    <div class="container">
        <hr>
        
        <!-- Update form action to the current file -->
        <form action="" method="post">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="passwordrepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="passwordrepeat" id="passwordrepeat" required>
         
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="Sign_in.php">Sign in</a>.</p>
    </div>
</body>
</html>
