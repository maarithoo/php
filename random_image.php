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

        $koira0 = array ("kuva"=>"<img src='images/koira0.jpg'>",
                "alt"=>"<h2>Juno tötterö päässä</h2>",
                "width"=>"<p>Kuvan leveys 420 px</p>",
                "height" =>"<p> ja korkeus 600 px.</p>"),

        $koira1 = array ("kuva"=>"<img src='images/koira1.jpg'>",
                "alt"=>"<h2>Pixi ja Juno kalliolla</h2>",
                "width"=>"<p>Kuvan leveys 400 px</p>",
                "height"=>"<p> ja korkeus 620 px.</p>"),

        $koira2 = array ("kuva"=>"<img src='images/koira2.jpg'>",
                "alt"=>"<h2>Pixi lempisiilinsä kanssa</h2>",
                "width"=>"<p>Kuvan leveys 410 px</p>",
                "height"=>"<p> ja korkeus 610 px.</p>"),

        $koira3 = array ("kuva"=>"<img src='images/koira3.jpg'>",
                "alt"=>"<h2>Pixi ja Juno pedissä</h2>",
                "width"=>"<p>Kuvan leveys 430 px</p>",
                "height"=>"<p> ja korkeus 610 px.</p>")
        );
        
        foreach($kuvat[rand(0,count($kuvat)-1)] as $x => $val) {
            echo "$val";
          }

    ?>
    
    <button type="button" id="reload" onClick="window.location.reload();">Lataa uusi kuva</button>
          
    </body>
</html>