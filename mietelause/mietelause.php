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

$sqlkom = "SELECT * FROM maarit_aforismit ORDER BY RAND() LIMIT 1";
$hakutulos = mysqli_query($tietokantayhteys, $sqlkom);

while ($rivi = mysqli_fetch_array($hakutulos))
{   
    echo "<div class='flex-container'>";
        echo "<main class='main'>$rivi[3]</main><br>";
        echo "<nav class='byline'>Lähde:<br>$rivi[2]</nav><br>";

    if ($rivi[1] == "Oppiminen") {
        echo "<aside class='oppiminen'>Kategoria:<br>$rivi[1]</aside><br>"; 
        }    
        elseif ($rivi[1] == "Ystävyys") {
            echo "<aside class='ystavyys'>Kategoria:<br>$rivi[1]</aside><br>"; 
        }
        elseif ($rivi[1] == "Elämä") {
            echo "<aside class='elama'>Kategoria:<br>$rivi[1]</aside><br>"; 
        } 
        elseif ($rivi[1] == "Aika") {
            echo "<aside class='aika'>Kategoria:<br>$rivi[1]</aside><br>"; 
        } 
        else {
            echo "<aside class='onnellisuus'>Kategoria:<br>$rivi[1]</aside><br>"; 
        } 
        echo "</div>";
}
?>
    <footer>
        <button type="button" class="reload" onClick="window.location.reload();">Lue jokin toinen ajatelma</button>
    </footer>      
</body>
</html>