<?
  $bog=mysql_fetch_assoc(mysql_query("SELECT*FROM bogowie WHERE nazwa='".$_GET['bog']."';"));
  $b_znajomosc_1=0;$b_znajomosc_2=0;$b_znajomosc_3=0;$b_znajomosc_4=0;$b_znajomosc_5=0;$b_znajomosc_6=0;$b_znajomosc_7=0;$b_znajomosc_8=0;$b_znajomosc_9=0;$b_znajomosc_10=0;
  if($postac['bieglosci_minimum_1']>$postac['bieglosci_minimum_2']){$min_bie=$postac['bieglosci_minimum_1'];}else{$min_bie=$postac['bieglosci_minimum_2'];};
  if($postac['bieglosc_1']!=""){$b_znajomosc_1=kostka100();if($b_znajomosc_1>$min_bie){$b_znajomosc_1=$b_znajomosc_1+$postac['b_znajomosc_1'];}else{$b_znajomosc_1=$postac['b_znajomosc_1']+$min_bie;};};
  if($postac['bieglosc_2']!=""){$b_znajomosc_2=kostka100();if($b_znajomosc_2>$min_bie){$b_znajomosc_2=$b_znajomosc_2+$postac['b_znajomosc_2'];}else{$b_znajomosc_2=$postac['b_znajomosc_2']+$min_bie;};};
  if($postac['bieglosc_3']!=""){$b_znajomosc_3=kostka100();if($b_znajomosc_3>$min_bie){$b_znajomosc_3=$b_znajomosc_3+$postac['b_znajomosc_3'];}else{$b_znajomosc_3=$postac['b_znajomosc_3']+$min_bie;};};
  if($postac['bieglosc_4']!=""){$b_znajomosc_4=kostka100();if($b_znajomosc_4>$min_bie){$b_znajomosc_4=$b_znajomosc_4+$postac['b_znajomosc_4'];}else{$b_znajomosc_4=$postac['b_znajomosc_4']+$min_bie;};};
  if($postac['bieglosc_5']!=""){$b_znajomosc_5=kostka100();if($b_znajomosc_5>$min_bie){$b_znajomosc_5=$b_znajomosc_5+$postac['b_znajomosc_5'];}else{$b_znajomosc_5=$postac['b_znajomosc_5']+$min_bie;};};
  if($postac['bieglosc_6']!=""){$b_znajomosc_6=kostka100();if($b_znajomosc_6>$min_bie){$b_znajomosc_6=$b_znajomosc_6+$postac['b_znajomosc_6'];}else{$b_znajomosc_6=$postac['b_znajomosc_6']+$min_bie;};};
  if($postac['bieglosc_7']!=""){$b_znajomosc_7=kostka100();if($b_znajomosc_7>$min_bie){$b_znajomosc_7=$b_znajomosc_7+$postac['b_znajomosc_7'];}else{$b_znajomosc_7=$postac['b_znajomosc_7']+$min_bie;};};
  if($postac['bieglosc_8']!=""){$b_znajomosc_8=kostka100();if($b_znajomosc_8>$min_bie){$b_znajomosc_8=$b_znajomosc_8+$postac['b_znajomosc_8'];}else{$b_znajomosc_8=$postac['b_znajomosc_8']+$min_bie;};};
  if($postac['bieglosc_9']!=""){$b_znajomosc_9=kostka100();if($b_znajomosc_9>$min_bie){$b_znajomosc_9=$b_znajomosc_9+$postac['b_znajomosc_9'];}else{$b_znajomosc_9=$postac['b_znajomosc_9']+$min_bie;};};
  if($postac['bieglosc_10']!=""){$b_znajomosc_10=kostka100();if($b_znajomosc_10>$min_bie){$b_znajomosc_10=$b_znajomosc_10+$postac['b_znajomosc_10'];}else{$b_znajomosc_10=$postac['b_znajomosc_10']+$min_bie; };};
  $wynik=mysql_query("UPDATE postac SET bog_nazwa='".$bog['nazwa']."',bog_symbol='".$bog['symbol']."',bog_info='".$bog['info']."',b_znajomosc_1='".$b_znajomosc_1."',b_znajomosc_2='".$b_znajomosc_2."',b_znajomosc_3='".$b_znajomosc_3."',b_znajomosc_4='".$b_znajomosc_4."',b_znajomosc_5='".$b_znajomosc_5."',b_znajomosc_6='".$b_znajomosc_6."',b_znajomosc_7='".$b_znajomosc_7."',b_znajomosc_8='".$b_znajomosc_8."',b_znajomosc_9='".$b_znajomosc_9."',b_znajomosc_10='".$b_znajomosc_10."' WHERE user='".$postac['user']."';");

?>