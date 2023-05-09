<?php
  class product {
  public $name;
  public $price;
  public $discount;
  function getPrice(){
  return $this->price;
}
function setPrice($price){
  $this->price=$price;
  }
  function getName(){
  return $this->name;
  }
  function setName($name){
  $this->name = $name;
  }
  function getDiscount(){
  return $this->discount;
  }
  function setDiscount($discount){
  $this->discount = $discount;
  }
  }
  ?>