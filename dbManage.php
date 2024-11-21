<?php
$host="localhost";
$user ="root";
$pass ='';
$db="dblms" ;
//create connection
$conn = new  mysqli($host, $user, $pass,$db) or
    die("Connection failed: " . mysqli_connect_error());

?>