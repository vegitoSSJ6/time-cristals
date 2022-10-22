<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$imie."';"));

  if($postac['aktualny_poziom_1']>18){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+10000; if($krag_magii>10){$krag_magii=11;};include("podnies_wspolczynniki.php");}
   elseif($postac['aktualny_poziom_1']>13&&$postac['aktualny_poziom_1']<19){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+5000;include("podnies_wspolczynniki.php");}
   elseif($postac['aktualny_poziom_1']>8&&$postac['aktualny_poziom_1']<14){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+2500;include("podnies_wspolczynniki.php");}
   elseif($postac['aktualny_poziom_1']==8){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+1000;include("podnies_wspolczynniki.php");}
   elseif($postac['aktualny_poziom_1']==7){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+1500;include("podnies_wspolczynniki.php");}
   elseif($postac['aktualny_poziom_1']>3&&$postac['aktualny_poziom_1']<7){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+250;include("podnies_wspolczynniki.php");}
  else{$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+50;include("podnies_wspolczynniki.php");};

  $wynik=mysql_query("UPDATE postac SET zywotnosc='".$zywotnosc."',sila_fizyczna='".$sila_fizyczna."',zrecznosc='".$zrecznosc."',szybkosc='".$szybkosc."',inteligencja='".$inteligencja."',madrosc='".$madrosc."',u_magiczne='".$u_magiczne."',charyzma='".$charyzma."',prezencja='".$prezencja."',wiara='".$wiara."',pd_do_next_level_1='".$pd_do_next_level."',pd_do_next_level_2='".$pd_do_next_level."',aktualny_poziom_1='".$aktualny_poziom."',aktualny_poziom_2='".$aktualny_poziom."' WHERE user='".$imie."';");


?>


