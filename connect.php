<?php

$con = new mysqli('localhost','root','','bloombergfarm');
if(!$con){
     
   die (mysqli_error($con));
   }