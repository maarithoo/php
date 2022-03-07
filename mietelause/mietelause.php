<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aforismiautomaatti</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mietelause.css">
</head>

<header><h1>Aforismiautomaatti<h1></header>
<body>
 
<?php
    // aukaistaan tietokantayhteys
    $tietokantayhteys = 
    mysqli_connect("", "kurssi", "kood10tus", "php2022");

    // tarkista yhteysvirheet
    if (mysqli_connect_errno()) {
        echo "Yhteysvirhe tietokantaan: " . mysqli_connect_error();
    }
    // Asetetaan merkistö jotta ääkköset näkyvät
    mysqli_set_charset($tietokantayhteys,"utf8");

    // Haetaan tietokantataulusta satunnainen aforismi
    $sqlkom = "SELECT * FROM maarit_aforismit ORDER BY RAND() LIMIT 1";
    $hakutulos = mysqli_query($tietokantayhteys, $sqlkom);

    // Haetaan arraysta halutut arvot loopilla
    $rivi = mysqli_fetch_array($hakutulos);
    
    // Tulostetaan halutut taulukkoarvot css:llä määriteltyihin diveihin, kategoria-arvojen taustaväri muuttuu näytetyn aforismin mukaan, kts. myös vaihtoehtoinen if-lauseen toteutus allaolevassa kommentissa.
    echo "<div class='flex-container'>";
        echo "<main class='main'>$rivi[3]</main><br>";
        echo "<nav class='byline'>Lähde:<br>$rivi[2]</nav><br>";
        echo "<aside class=" . $rivi[1] . "> Kategoria:<br>" . $rivi[1] . "</aside><br>"; 


    /* Tehtävänannossa kehotettiin käyttämään if-lausetta, eli tein ensin tämän version taustavärin vaihtumisesta. Kuitenkin ylempänä oleva vaihtoehto on toteutettu yksinkertaisemmin, joten jätin sen voimaan.

    if ($rivi[1] == "Oppiminen") {
        $kategoria = "Oppiminen"; 
        }    
        elseif ($rivi[1] == "Ystävyys") {
            $kategoria = "Ystävyys"; 
        }
        elseif ($rivi[1] == "Elämä") {
            $kategoria = "Elämä"; 
        } 
        elseif ($rivi[1] == "Aika") {
            $kategoria = "Aika"; 
        } 
        elseif ($rivi[1] == "Onnellisuus") {
            $kategoria = "Onnellisuus"; 
        } 
        echo "<aside class=" . $kategoria . "> Kategoria:<br>" . $rivi[1] . "</aside><br>"; */
        
    echo "</div>";

?>
    <footer>
        <button type="button" class="reload" onClick="window.location.reload();">Lue jokin toinen ajatelma</button>
    </footer>      
</body>
</html>