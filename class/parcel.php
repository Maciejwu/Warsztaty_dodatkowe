<?php
  /**
  * Class represent Parcel;
  */
  class Parcel{

    private $parcelUser;
    private $parcelAddress;
    private $parcelSize;

    static public $connection;

    public function __construct(){
        $this->$parcelUser = '';
        $this->parcelAddress = '';
        $this->parcelSize = '';
    }


    public function getParcelUser()
    {
      return $this->parcelUser;
    }
    public function setParcelUser($parcelUser)
    {
      if(is_string($parcelUser)){
        $this->parcelUser = $parcelUser;
        return true;
      }
    }
    public function getParcelAddress()
    {
      return $this->parcelAddress;
    }
    public function setParcelAddress($parcelAddress)
    {
      if(is_string($parcelAddress)){
        $this->parcelAddress = $parcelAddress;
        return true;
      }
    }
    public function getParcelSize()
    {
      return $this->parcelSize;
    }
    public function setParcelSize($parcelSize)
    {
      if(is_string($parcelSize)){
        $this->parcel = $parcelSize;
        return true;
      }
    }

}



?>
