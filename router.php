<?php

require 'config/connection.php';

//deklaracje zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';
$requestParam = '';
$requestParam = null;

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

if(isset($arrayRequest[3])){
  //zamiana stringa na inta
  $requestParam = intval($arrayRequest[3]);
}
else{
  echo 'nie podałeś parametru';
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
   if($requestClass == 'user'){

     //TODO poszukać lepszego rozwiązania
     if($requestParam > 0){
       //wyświetl jednego usera
       $oUser = new User();
       $userData = $oUser->loadFromDB($requestParam);
     }
     if($requestParam == null){
       $allUsers = User::loadAllfromDB();
       var_dump($allUsers);
     }
     else{
       //wyświetl wszystkich
     }
   }
}







 ?>
