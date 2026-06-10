<?php
class Product{
    public $name;
    public $price;

    public function priceAsCurrency(){
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }
}

$priceAsCurrency = new Product();

//var_dump($priceAsCurrency);
$priceAsCurrency->price= 1000;
print "The priceAsCurrency is {$priceAsCurrency->priceAsCurrency()}\n}";10
?>