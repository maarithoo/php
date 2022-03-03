<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tyyli.css">
        <title>Kertotaululaskin</title>
	</head>
	<body>
        <header><h1>Kertotaululaskin</h1></header>
		<div>
            <p>Syötä jokin numero, niin näet sen kertotaulun.</p>

            <!-- Luvun syöttö -->
		    <form method="post" action="kertotaulu.php">
		        <input name="luku1" type="text" />
		        <input name="submit" type="submit" class="nappi" value="Näytä kertotaulu" />
		    </form>

			<?php
			
            // Nappulaa painettaessa
			if(isset($_POST['submit']))
			{   
                $luku1 = $_POST['luku1'];

				// Tarkistaa onko input numero TAI syötetyn luvun arvo nolla tai pienempi
                if(!is_numeric($luku1) or $luku1 <= 0)
                {   echo "<br><p>Syötä luku, joka ei ole nolla tai pienempi!</p>";
                }  
                else // Laskee kertotaulun
                {
                    for ($i=1; $i<=10; $i++)
                    {
                        $kerto = $luku1 * $i;
                        echo "<p>$luku1 * $i = $kerto</p>";
                    }
                } 
            }            

            ?>
		    
		</div>
	
	</body>
</html>