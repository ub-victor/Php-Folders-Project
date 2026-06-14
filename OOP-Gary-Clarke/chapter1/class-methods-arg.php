<?php
    class Product {
        public $name;
        public $price;

        public function priceAsCurrency(){
            $priceAsCurrency = $this->price / 100;
            return $priceAsCurrency;
        }
    }


?>
