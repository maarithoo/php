<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arrayt</title>
	</head>
	<body>

    <?php

        $koirat = array("Juno", "Pixi", "Nappis");

        $snacksit[] = "suklaa";
        $snacksit[] = "omenarenkaat";
        $snacksit[] = "suolapähkinät";

        echo $koirat[2];
        echo "<br>";
        echo $snacksit[0];

        echo $koirat[rand(0, 2)];

        $luku = rand(0, 2);
        echo $koirat[rand(0,$luku)];
    ?>

    </body>
</html>