<?php
$hostName = "sql12.freesqldatabase.com";
$dbUser = "sql12623601";
$dbPassword = "lYy1JkLGd7";
$dbName = "sql12623601";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong!!!!");
} 
?> 