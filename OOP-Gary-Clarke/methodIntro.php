<?php
class Product{
    public $name;
    public $price;

    public function priceAsCurrency(){
        return $this->price / 100;
    }
}

?>