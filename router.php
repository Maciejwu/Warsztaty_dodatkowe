<?php

require 'config/connection.php';

//deklaracje zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';

//Parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode('/', $request);

if(isset($arrayRequest[2])){
  $requestClass = $arrayRequest[2];
}
else {
  echo 'Nie podałeś nazwy klasy';
  die();
}

var_dump($requestClass);
// $arrayRequest[0] = router.php
//$arrayRequest[1] = user


if($_SERVER['REQUEST_METHOD'] == 'GET'){
  if($_SERVER['REQUEST_URI'] == '/router.php/user'){
    $newUser = new User();
  }
  else{

  }
}





 ?>
