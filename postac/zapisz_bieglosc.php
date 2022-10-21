<?
if($bieglosc=="Podwojnie Biegly"){$pd=5+$postac['punkty_doswiadczenia']; $b_znajomosc=$b_znajomosc+5;};
if($bieglosc=="Specjalista"){$pd=10+$postac['punkty_doswiadczenia']; $b_znajomosc=$b_znajomosc+10;};
if($bieglosc=="Podwojny Specjalista"){$pd=15+$postac['punkty_doswiadczenia']; $b_znajomosc=$b_znajomosc+15;};
if($bieglosc=="Mistrz"){$pd=20+$postac['punkty_doswiadczenia']; $b_znajomosc=$b_znajomosc+20;};
if($bieglosc=="Wielki Mistrz"){$pd=25+$postac['punkty_doswiadczenia']; $b_znajomosc=$b_znajomosc+25;};


  if($postac['bieglosci_ilosc_start_2']>=1){$bieglosc=$postac['bieglosci_ilosc_start_2']-1; $wynik=mysql_query("UPDATE postac SET bieglosci_ilosc_start_2='".$bieglosc."' WHERE user='".$postac['user']."';");}
  else{$bieglosc=$postac['bieglosci_ilosc_start_1']-1; $wynik=mysql_query("UPDATE postac SET bieglosci_ilosc_start_1='".$bieglosc."' WHERE user='".$postac['user']."';");};


?>