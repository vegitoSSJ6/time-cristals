<?
$tytul1=" ";
$tytul2=" ";
if($postac['aktualny_poziom_1']>0&&$postac['aktualny_poziom_1']<5){$tytul1=$postac['tytul_p1_1']; $tytul2=$postac['tytul_p2_1'];};
if($postac['aktualny_poziom_1']>4&&$postac['aktualny_poziom_1']<10){$tytul1=$postac['tytul_p1_2']; $tytul2=$postac['tytul_p2_2'];};
if($postac['aktualny_poziom_1']>9&&$postac['aktualny_poziom_1']<15){$tytul1=$postac['tytul_p1_3']; $tytul2=$postac['tytul_p2_3'];};
if($postac['aktualny_poziom_1']>14&&$postac['aktualny_poziom_1']<18){$tytul1=$postac['tytul_p1_4']; $tytul2=$postac['tytul_p2_4'];};
if($postac['aktualny_poziom_1']==18){$tytul1=$postac['tytul_p1_5']; $tytul2=$postac['tytul_p2_5'];};
if($postac['aktualny_poziom_1']==19){$tytul1=$postac['tytul_p1_6']; $tytul2=$postac['tytul_p2_6'];};
if($postac['aktualny_poziom_1']>19){$tytul1=$postac['tytul_p1_7']; $tytul2=$postac['tytul_p2_7'];};


if($postac['aktualny_poziom_1']>0){print(" \"".$tytul1."\" \"".$tytul2."\" ".$postac['tytul']." ".$postac['user']." ");}
else{print(" ".$postac['tytul']." ".$postac['user']." ");};

?>


