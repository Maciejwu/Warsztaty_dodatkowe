<?php
  /**
  * Class represent one user;
  */
  class User{

    private $id;
    private $addressId;
    private $name;
    private $surname;
    private $credits;
    private $password;
    static public $connection;

    public function __construct(){
        $this->id = -1;
        $this->addressId = null;
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
      return $this->addressId;
    }
    public function setAddress($addressId)
    {
      if(is_int($addressId)){
        $this->addressId = $addressId;
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
      }
    }
    public function getHashedPassword()
    {
      return $this->password;
    }
    public function setHashedPassword($password)
    {
        $newHashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $this->hashedassword = $newHashedPassword;
    }
    public function loadFromDB($idUser){
      $sql = "SELECT * FROM user WHERE id = $idUser";
      if ($result = Self::$connection->query($sql)){
        $row = $result->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->surname = $row['surname'];
        $this->credits = $row['credits'];
        $this->newHashedPassword = $row['pass'];
        $this->addressId = $row['address_id'];

        //not true because usage on view
        return $row;
      }
      else{
        return false;
      }
    }
    //statyczna do wszystkich
    static public function loadAllfromDB(){
      $sql = "SELECT * FROM user";

      if ($result = Self::$connection->query($sql)){
        $row = [];
        $n = 0;
        foreach ($result as $key => $value) {
          $row[$key] = $value;
        }
        return $row;
      }
      else{
        return false;
      }
    }
}



?>
