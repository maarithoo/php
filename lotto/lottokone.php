<!DOCTYPE html>
<html lang=fi>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lottostyle.css">
        <title>Lottokone</title>
	</head>
    <body>
    <header><h1 class="gradient">Pelataan lottoa!</h1></header>
	
       
    <div class="ohje">
        <h2>Syötä ruutuihin kuusi numeroa 1 ja 30 väliltä, ja tarkista saitko oikean lottorivin.</h2>
    </div>    

    <!-- If - else -rakenne, jotta syötetut luvut pysyvät näkyvissä submitin jälkeen -->
    <?php if(!isset($_POST['submit'])) { ?>
        
        <div>
        <!-- Lukujen syöttö lomakkeeseen -->
        <form action="lottokone.php" method="post">
            <input type="text" name="eka">
            <input type="text" name="toka">
            <input type="text" name="kolmas">
            <input type="text" name="neljas">
            <input type="text" name="viides">
            <input type="text" name="kuudes"><br><br>
            <input name="submit" type="submit" class="nappi" value="Kokeile onneasi!">
        </form>
        </div> 

        <?php } else { ?>

        <div>
        <form action="lottokone.php" method="post">
            <input type="text" name="eka" value='<?= $_POST['eka']?>'>
            <input type="text" name="toka" value='<?=$_POST['toka']?>'>
            <input type="text" name="kolmas" value='<?=$_POST['kolmas']?>'>
            <input type="text" name="neljas" value='<?=$_POST['neljas']?>'>
            <input type="text" name="viides" value='<?=$_POST['viides']?>'>
            <input type="text" name="kuudes" value='<?=$_POST['kuudes']?>'><br><br>
            <input name="submit" type="submit" class="nappi" value="Kokeile onneasi!">
        </form>
        </div> 

    <?php }

        // Funktio, joka hyväksyy vain tietyt luvut input-kenttiin
        function isIllegal($luku) {
            return !is_numeric($luku) or $luku <= 0 or $luku > 30;
        }
        
        // Kun painaa "Kokeile onneasi" -nappulaa
		if(isset($_POST['submit']))
		{
			// Tarkistetaan syötetyt luvut aiemmin määritetyllä funktiolla (ei kirjaimia eikä lukuja 1-30 ulkopuolella)
            if (isIllegal($_POST['eka']) or isIllegal($_POST['toka']) or isIllegal($_POST['kolmas']) or isIllegal($_POST['neljas']) or isIllegal($_POST['viides']) or isIllegal($_POST['kuudes'])) {
                echo "<h2>Syötä vain numeroita 1 ja 30 väliltä!</h2>";
            }
            // Tarkistetaan, ettei ole samoja syötettyjä numeroita
            elseif(count(array_unique($_POST))<count($_POST)) {
                echo "<h2>Kaikkien on oltava eri numeroita!</h2>";
            }

            else {
                // Arpoo lottorivin
                $numerot = range(1,30);
                $lottorivi = array_rand(array_flip($numerot), 6);
                
                // Vertaa syötettyjä numeroita arvottuun lottoriviin
                $tarkistus = array_intersect($_POST, $lottorivi); 
                if (count($tarkistus) == 6) {
                    echo "<h2>Kaikki oikein!</h2>";
                }
                // Kertoo oikein arvattujen numeroiden määrän
                else {
                    echo "<h2>Numeroista " . count($tarkistus) . "  oli oikein.</h2><br>";
                }
                // Ja lopuksi oikean lottorivin
                echo "<p>Oikea lottorivi on: " . $lottorivi[0] . ", " . $lottorivi[1] . ", " . $lottorivi[2] . ", " . $lottorivi[3] .", " . $lottorivi[4] . ", " . $lottorivi[5] ."</p>";
            }  
        }
    ?>
        <footer>
        <a href="lottokone.php" class="nappi2">Tee uusi rivi!</a>
        </footer>

    </body>
</html>    