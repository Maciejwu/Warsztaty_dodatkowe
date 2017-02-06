<?php

include 'class/User.php';

$host= "localhost";
$user= "root";
$password= "coderslab";
$db= "";

//$connection = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $password);

//FAKE TO DELETE Now
$connection = 'fakeconnection';

User::$connection = $connection;


?>
