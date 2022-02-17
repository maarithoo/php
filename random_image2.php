<!DOCTYPE html>
<html lang=fi>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Satunnainen koirakuva</title>
	</head>
	<body>
        <h1>Satunnainen koirakuva</h1>

    <?php

        $kuvat = array (

        $koira0 = array ("images/koira0.jpg", "Juno tötterö päässä", "600", "400"),
                
        $koira1 = array ("images/koira1.jpg", "Pixi ja Juno kalliolla", "600", "400"),

        $koira2 = array ("images/koira2.jpg", "Pixi lempisiilinsä kanssa", "600", "400"),

        $koira3 = array ("images/koira3.jpg", "Pixi ja Juno pedissä", "600", "400")
        );

        $randomLuku = rand(0,count($kuvat)-1);
        
        echo '<img src="' . $kuvat[$randomLuku][0] . '" alt="' . $kuvat[$randomLuku][1] . '" height="' . $kuvat[$randomLuku][2] . '" width="' . $kuvat[$randomLuku][3] .'"/>';
        echo "<br>"
        
    ?>
    
    <button type="button" id="reload" onClick="window.location.reload();">Lataa uusi kuva</button>
          
    </body>
</html>