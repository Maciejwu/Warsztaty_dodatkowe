<?php
  /**
  * Class represent parcel size;
  */
  class Size{

    private $size;
    private $price;

    static public $connection;

    public function __construct(){
        $this->size = '';
        $this->price = '';
    }


    public function getSize()
    {
      return $this->size;
    }
    public function setSize($size)
    {
      if(is_string($size)){
        $this->size = $size;
        return true;
      }
    }
    public function getPrice()
    {
      return $this->price;
    }
    public function setPrice($price)
    {
      if(is_string($name)){
        $this->price = $price;
        return true;
      }
    }
}



?>
