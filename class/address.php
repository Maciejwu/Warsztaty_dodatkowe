<?php
  /**
  * Class represent address;
  */
  class Address{

    private $city;
    private $postcode;
    private $street;
    private $homeNumber;

    static public $connection;

    public function __construct(){
        $this->city = '';
        $this->postcode = '';
        $this->street = '';
        $this->homeNumber = '';
    }

    public function getCity()
    {
      return $this->city;
    }
    public function setCity($city)
    {
      if(is_string($city)){
        $this->city = $city;
        return true;
      }
    }
    public function getPostcode()
    {
      return $this->postcode;
    }
    public function setPostcode($postcode)
    {
      if(is_string($postcode)){
        $this->postcode = $postcode;
        return true;
      }
    }
    public function getStreet()
    {
      return $this->street;
    }
    public function setStreet($street)
    {
      if(is_string($street)){
        $this->street = $street;
        return true;
      }
    }
    public function getHomeNumber()
    {
      return $this->homeNumber;
    }
    public function setHomeNumber($homeNumber)
    {
      if(is_string($homeNumber)){
        $this->homeNumber = $homeNumber;
        return true;
      }
    }

}



?>
