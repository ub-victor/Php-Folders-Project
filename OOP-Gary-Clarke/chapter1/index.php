<?php

class Product{
    public $name = "soap";
    public $price = 200;

}

$product = new Product();
// var_dump() is a built-in PHP function used for debugging.
//It prints detailed information about a variable, including:its type, its structure, its values
//var_dump($product); // it will output the object
/*
    → access object property
    . → join strings
*/
// → object operator (used to access properties or methods)
// print → outputs the value to the screen
//$soapProduct->name = "Laptop";

print "The name of our product is: " . $product->name . "\n";
print "The price of {$product->name} is {$product->price}\n";





?>