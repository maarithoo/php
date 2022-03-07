<!DOCTYPE html>
<html lang="en">
<head>
 <title> Mysqli_query sql-kyselyllä </title>
</head>
<body>
 
 <?php
// aukaistaan tietokantayhteys
$tietokantayhteys = 
  mysqli_connect("localhost", "kurssi", "kood10tus", "php2022");

// tarkista yhteysvirheet
if (mysqli_connect_errno()) {
  echo "Yhteysvirhe tietokantaan: " . mysqli_connect_error();
}

mysqli_set_charset($tietokantayhteys,"utf8");

// sijoitetaan sql-lause muuttujaan
$sql = "INSERT INTO maarit_kalat SET kala = 'made', väri = 'keltaruskea'";

// suoritetaan sql; or die lopettaa jos tulee virhe
mysqli_query($tietokantayhteys, $sql)
  or die("Virhe: " . mysqli_error($tietokantayhteys));

?>
<h1>Toimii!</h1>
 
</body>
</html>

