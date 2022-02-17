<!DOCTYPE html>
<html lang=fi>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Satunnainen koirakuva</title>
	</head>
	<body>
        <h1>Satunnainen koirakuva</h1>

    <?php
        
        $kuvat = array (

        $koira0 = array ("src"=>"images/koira0.jpg",
                "alt"=>"Juno tötterö päässä",
                "width"=>"400 px",
                "height" =>"600 px"),

        $koira1 = array ("src"=>"images/koira0.jpg",
                "alt"=>"Pixi ja Juno kalliolla",
                "width"=>"400 px",
                "height"=>"600 px"),

        $koira2 = array ("src"=>"images/koira0.jpg",
                "alt"=>"Pixi lempisiilinsä kanssa",
                "width"=>"400 px",
                "height" =>"600 px"),

        $koira3 = array ("src"=>"images/koira0.jpg",
                "alt"=>"Pixi ja Juno pedissä",
                "width"=>"400 px",
                "height" =>"600 px"),
        );
        
        $randomLuku = rand(0,count($kuvat)-1);

        echo '<img src="' . $kuvat[$randomLuku]['src'] . '" alt="' . $kuvat[$randomLuku]['alt'] . '" height="' . $kuvat[$randomLuku]['height'] . '" width="' . $kuvat[$randomLuku]['width'] .'"/>';
        echo "<br>"

    ?>
    
    <button type="button" id="reload" onClick="window.location.reload();">Lataa uusi kuva</button>
          
    </body>
</html>