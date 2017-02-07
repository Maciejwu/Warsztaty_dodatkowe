<?php
  include '../class/User.php';

  $oUser = new User();

  var_dump($oUser);

  if ($oUser instanceof User){
    echo 'instance of user';
  }
  else{
    echo 'istant is not user';
  }

//TODO test get and sets
//TODO function to set and gets
//TODO utworzyc polaczenie z baza i tabele
//TODO dopisac analogicznie do klasy ueser klasy do paczki, rozmiaru i czegostam jeszcze
  var_dump($oUser->setName('name'));
  var_dump($oUser->setHashedPassword('passwordHashed'));



?>
