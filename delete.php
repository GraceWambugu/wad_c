<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
}

$sql="delete from `signup` where id = $id";
$result=mysqli_query($con,$sql);

if($result){
    echo"seleted succesfully";
}else{
    die (mysqli_error($con));
}
?>