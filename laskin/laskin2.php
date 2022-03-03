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

            $numero = 1;
            while ($numero <= 10)
            {
                echo "Numero on: $numero <br>";
                $numero++;
            }

            $numero = 10;
            while ($numero > 0)
            {
                echo "Numero on: $numero <br>";
                $numero--;
            }
                echo "Tähän loppui."

        ?>    
        </p>
    </body>
</html>