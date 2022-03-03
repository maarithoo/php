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
               
                do {
                   echo $luku1 . "<br>";
                   $luku1++;
                } while ($luku1 <= 10);
               
            $luku2 = 10;
               
                do {
                   echo $luku2 . "<br>";
                   $luku2--;
                } while ($luku2 > 0);

            ?>    
        </p>
    </body>
</html>