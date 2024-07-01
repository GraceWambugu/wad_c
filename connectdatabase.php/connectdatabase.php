<?php
$db_server = 'localhost';
$db_user='root';
$db_pass ='';
$db_name = 'bloombergfarm';
$con='';
$con= mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($con){
    echo"You are connected";
}
else{
    echo"Could not connect";
}
?>
