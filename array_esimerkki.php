<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arrayt</title>
	</head>
	<body>
    <?php

    $lapset[] = "Vilmiina";
    $lapset[] = "Ranja";
    $lapset[] = "Maksimus"; 
    $lapset[] = "Viljo"; 
    $lapset[] = "Liisa"; 

    echo $lapset[rand(0,count($lapset)-1)];

    /*
    $lukumäärä = count($lapset)-1;
    $satunnaisluku = rand(0,$lukumäärä);
    echo $lapset[$satunnaisluku];
    */

    $ranjatytto = array (
        "nimi"=>"Ranja",
        "ika"=>2,
        "hiusvari"=>"kastanja",
        "muuta"=>"osaa purra varvastaan");
    
    
    echo $ranjatytto["ika"];

    
    ?>
    </body>
</html>