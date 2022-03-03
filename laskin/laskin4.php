<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tyyli.css">
        <title>Laskin</title>
	</head>
	<body>
        <p>
            <?php

            $luku1 = 1;
               
                for ($luku1 = 1; $luku1 <= 10; $luku1++) {
                    echo $luku1 . "<br>";
                }

            $luku2 = 10;
               
                for ($luku2 = 10; $luku2 > 0; $luku2--) {
                    echo $luku2 . "<br>";
                }    
            ?>    
        </p>
    </body>
</html>