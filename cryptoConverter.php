<?php
include "urls.php";
class CryptoConverter{
    //constructor
    function __construct(public string $currencyCode) {
   
    }

    //methods
    public function convert(float $value): float{
        $code = $this ->currencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);

        if($json) {

            $data = json_decode($json);
            
            // display all of the $json into an object
            // var_dump($data);

            //find the "last"
            $last = $data->last;
            
            echo $last;
            echo $value;

            return $last * $value;
        
        }else {
            return $last;
        }

    }

}

$c = new CryptoConverter("BTC");