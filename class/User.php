<?php
  /**
  * Class represent one user;
  */
  class User{

    private $id;
    private $address;
    private $name;
    private $surname;
    private $credits;
    private $hashedPassword;
    static public $connection;

    public function __construct(){
        $this->id = -1;
        $this->address = '';
        $this->name = '';
        $this->surname = '';
        $this->credits = null;
        $this->hashedPassword = '';
    }
    public function getId()
    {
      return $this->id;
    }
    public function getAddress()
    {
      return $this->address;
    }
    public function setAddress($address)
    {
      if(is_string($address)){
        $this->address = $address;
        return true;
      }
    }
    public function getName()
    {
      return $this->name;
    }
    public function setName($name)
    {
      if(is_string($name)){
        $this->name = $name;
        return true;
      }
    }
    public function getSurname()
    {
      return $this->surname;
    }
    public function setSurname($surname)
    {
      if(is_string($surname)){
        $this->surname = $surname;
        return true;
      }
    }
    public function getCredits()
    {
      return $this->credits;
    }
    public function setCredits($credits)
    {
      if(is_string($credits)){
        $this->credits = $credits;
        return true;
      }
    }
    public function getHashedPassword()
    {
      return $this->hashedPassword;
    }
    public function setHashedPassword($hashedPassword)
    {
        $hashedPassword = password_hash($hashedPassword, PASSWORD_BCRYPT);
        $this->hashedPassword = $passwordHashed;
        return true;
    }


}



?>
