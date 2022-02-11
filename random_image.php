<!DOCTYPE html>
<html lang=fi>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Satunnainen koirakuva</title>
	</head>
	<body>
    <?php

        /*$kuvat[] = "koira0";
        $kuvat[] = "koira1";
        $kuvat[] = "koira2";
        $kuvat[] = "koira3"; */
        
        $kuvat = array (

        $koira0 = array ( "kuva"=>"img src=../koira0.jpg",
                "alt"=>"Juno tötterö päässä",
                "width"=>"420",
                "height" =>"600"),

        $koira1 = array ( "kuva"=>"img src=../koira1.jpg",
                "alt"=>"Pixi ja Juno kalliolla",
                "width"=>"420",
                "height"=>"600"),

        $koira2 = array ( "kuva"=>"img src=../koira2.jpg",
                "alt"=>"Pixi lempisiilinsä kanssa",
                "width"=>"420",
                "height"=>"600"),

        $koira0 = array ( "kuva"=>"img src=../koira3.jpg",
                "alt"=>"Pixi ja Juno sylikkäin",
                "width"=>"420",
                "height"=>"600")
        );

        echo $kuvat[rand(0,count($kuvat)-1)];

    /* img src="../koira1.jpg" */
    ?>

    
    </body>
</html>