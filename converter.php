<?php

class CryptoConverter {

    //properties
    public string $currencyCode;

    //constructor
    function __construct(string $currencyCode) {
        //We use thin arrow to access property functions
            $this->cureencyCode = $currencyCode;
    }

    //methods
    public function convert(float $value){

    }

}

$c = new CryptoConverter();