<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converstion</title>
</head>
<body>
    <h1>Convert Results</h1>

    <?php

    // var_dump($_SERVER);

    $browserUA = $_SERVER["HTTP_USER_AGENT"];

    echo $browserUA;
            //superglobal variables
            $amount = $_POST["amount"];
            $crypto = $_POST["crypto"];

            //check if data exists 

            if(isset($_POST["amount"]) && isset($_POST["crypto"]) ) { 
                echo ("<p>You want to convert $amount from $crypto.</p>");
                
            }else { 
            
               echo ("<h2>OOPS did not work </h2>");
              
            


            }
?>
</body>
</html>