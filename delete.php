<?php
include 'connect.php';

// Check if deleteid parameter is set in the URL
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    // Perform deletion query
    $sql = "DELETE FROM `signup` WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Deleted successfully";
    } else {
        die(mysqli_error($con));
    }
} else {
    echo "No deleteid parameter specified";
}
?>
