

<?php 
$numerot = array(4,7,5,8,6,13,9,1,3,11,2,14,16,10,12,15); 

foreach ($numerot as $value) {
    if ($value > 8) {
        echo $value . "<br>";
        $suuretNumerot[] = $value;
    }
}

print_r($suuretNumerot);

/*Lisää silmukkaan if-lause jotta se tulostaa vain luvut jotka ovat suurempia kuin 8.
Bonus: luo tulostettavista numeroista uusi taulukkomuuttuja (esim. $suuretNumerot= …)*/


?>
