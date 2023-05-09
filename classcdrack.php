<?php
class CDRack extends product
    {
    public $capacity;
    public $model;
    function getCapacity(){
      return $this->capacity;
    }
    function setCapacity($capacity){
    $this->capacity = $capacity;
    }
    function getModel(){
    return $this->model;
    }
    function setModel($model){
    $this->model = $model;
    }
    function setPrice($price){
    $this->price = $price;
    }
    function getPrice(){
    $harga = $this->price;
    $tambahan = ((15 / 100) * $this->price);
    return $harga + $tambahan;
    }
    }
    ?>