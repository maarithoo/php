<!DOCTYPE html>
<html lang="en">
<head>
 <title> Select-käsky PHP:ssä </title>
 <meta charset="UTF-8">
 <style>
    table, th, td {
    border: 1px solid black;
    text-align: center;
    }
    table {
    border-spacing: 2px;
    }
</style>
</head>
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


$sql = "SELECT * FROM maarit_kalat";
$result = mysqli_query($tietokantayhteys, $sql);

echo "<table>";
echo "<tr><th>Nro</th><th>Kala</th><th>Väri</th></tr>";
// Kyselyn tuloksen läpikäyminen
while ($row = mysqli_fetch_array($result)) {
	echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> </tr>";
}
echo "</table>";

?>
 
</body>
</html>