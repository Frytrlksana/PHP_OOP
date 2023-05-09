<?php
require_once 'Implementasi.php';
class CDMusic extends product
{
  public $artist;
  public $genre;
  function __construct($name="nama", $price="harga", $discount="diskon"){
  }
  function getArtist(){
  return $this->artist;
  }
  function setArtist($artist){
    $this->artist = $artist;
    }
    function getGenre(){
    return $this->genre;
    }
    function setGenre($genre){
    $this->genre = $genre;
    }
    function setPrice($price){
    $this->price = $price;
    }
    function getPrice(){
    $harga = $this->price;
    $ppn = ((10/100) * $this->price);
    $discount = ((5/100) * $this->price);
    return ($harga + $ppn) - $discount;
    }
    function setDiscount($discount){
    $this->discount = $discount;
    }
    }
    ?>