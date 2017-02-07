<?php

require 'class/User.php';
include 'class/address.php';
include 'class/parcel.php';
include 'class/size.php';

$host = "localhost";
$user = "root";
$password = "coderslab";
$db= "paczkolab";


//tworzenie bazy danych paczkolab
$query = 'CREATE DATABASE `paczkolab`';

$conn = new PDO("mysql:host=$host; charset=UTF8", $user, $password);
$result = $conn->query($query);


$connection = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $password);

User::$connection = $connection;
Parcel::$connection = $connection;
Address::$connection = $connection;
Size::$connection = $connection;

?>
