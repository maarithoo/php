<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Satunnainen koirakuva</title>
	</head>
	<body>
    <?php

        $kuvat[] = "koira1";
        $kuvat[] = "koira2";
        $kuvat[] = "koira3"; 
        $kuvat[] = "koira4";

        echo $kuvat[rand(0,count($kuvat)-1)];

        <img src="koira1.jpg">
    ?>
    </body>
</html>