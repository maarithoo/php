<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tyyli.css">
        <title>Laskin</title>
	</head>
	<body>
        <header><h1>Laskin</h1></header>
		<div>
            <p>Syötä kenttiin kaksi lukua ja valitse haluamasi laskutoimitus.<br> "Laske"-nappia painamalla saat tuloksen.</p>

            <!-- Laskimen kentät -->
		    <form method="post" action="laskin.php">
		        <input name="luku1" type="text" />
		        <select name="operation" class="laskut">
		        	<option value="plus">+</option>
		            <option value="miinus">-</option>
		            <option value="kertaa">x</option>
		            <option value="jaettuna">/</option>
		        </select>
		        <input name="luku2" type="text" />
		        <input name="submit" type="submit" class="nappi" value="Laske" />
		    </form>

			<?php
			
				// Nappulaa painettaessa
				if(isset($_POST['submit']))
				{
					// Tarkistaa syötetyt arvot
					if(is_numeric($_POST['luku1']) and is_numeric($_POST['luku2']))
					{
						// Laskutoimitukset
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['luku1'] + $_POST['luku2'];	
						}
						elseif($_POST['operation'] == 'miinus')
						{
							$total = $_POST['luku1'] - $_POST['luku2'];	
						}
						elseif($_POST['operation'] == 'kertaa')
						{
							$total = $_POST['luku1'] * $_POST['luku2'];	
						}
						elseif (($_POST['operation'] == 'jaettuna') && ($_POST['luku2'] <= 0)) {
							echo "<br><p>Jakaja ei voi olla nolla tai pienempi.</p>";	
							}
						 	
							else {
							$total = $_POST['luku1'] / $_POST['luku2'];
							}	
						
						// Laskun tuloksen printtaus

						if (isset($total))
						{
						echo "<br><h2>{$_POST['luku1']} {$_POST['operation']} {$_POST['luku2']} on {$total}.</h2>";
						}
					
					} else {
						
						// Tekstinsyötön virheilmoitus
						echo '<br><p>Syötä kenttiin vain numeroita.</p>';
					
					}
				}
			
			?>
		    
		</div>
	
	</body>
</html>