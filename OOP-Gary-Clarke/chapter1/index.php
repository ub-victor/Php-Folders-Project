<?php

class Product{
    public $name = "soap";

}

$product = new Product();
$anotherProduct = new Product();

// var_dump() is a built-in PHP function used for debugging.
//It prints detailed information about a variable, including:its type, its structure, its values
var_dump($product); // it will output the object
$soapProduct = new Product();
print $soapProduct->name;
print




?>