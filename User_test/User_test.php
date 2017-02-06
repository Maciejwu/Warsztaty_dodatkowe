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
  var_dump($oUser->setName('name'));
  var_dump($oUser->setHashedPassword('passwordHashed'));



?>
