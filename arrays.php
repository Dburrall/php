<?php


$list = array("id"=>1,4,"limit"=>26,13);

$countries = ['Brazil', 'Argentina', "USA", "Canada"];

echo $countries[2]; //will output USA
echo $list["id"]; //will output 1
echo "\n";
echo strlen($countries[1]); //will output 9

for($i = 0; $i<count($countries); $i++) {

}

foreach($countries as $i=>$country) {
    echo "$i: $country\n";
}

?>

