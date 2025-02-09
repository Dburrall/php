<?php

//standard function call
function printHello(){

    echo "Hello World";
}

printHello();

function calculateTax($price, $tax){ //With arguments they are functions so you use $ 
    return $price * $tax;
}

calculateTax(3000, 0.7);


//You can also enforce types on it like Typscript

//bool, int, float, string, array, object, callable

function calculatMoretax(int $price, int $tax){

}

//You can also used Named Arguments so like: 

calculatMoretax(price: 4000, tax: 0.7);

//With named arguments you don't need the $ sign.
?>