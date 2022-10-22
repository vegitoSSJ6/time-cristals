<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$imie."';"));
  $przeciwnik=mysql_fetch_assoc(mysql_query("SELECT*FROM istoty WHERE os_x='".$postac['os_x']."' AND os_y='".$postac['os_y']."';"));
  if($segmenty==0){$segmenty=$postac['szybkosc']/10;$segmenty_p=$przeciwnik['szybkosc']/10;};
	if($_GET['atak']!=""){$kostka=kostka100();
    $bron=$postac['b_bron_'.$_GET['atak'].'']; $b_znajomosc=$postac['b_znajomosc_'.$_GET['atak'].''];  
    $bieglosc=$postac['b_znajomosc_'.$_GET['atak'].'']+(($postac['sila_fizyczna']+$postac['zrecznosc'])/10);
    $atak=$bieglosc-$przeciwnik['obrona'];
    if($atak>=$kostka){
      if($postac['sku_klute_b_'.$_GET['atak'].'']>0){$sku_klu=$postac['sku_klute_b_'.$_GET['atak'].'']+($postac['sila_fizyczna']/4);}else{$sku_klu=$postac['sku_klute_b_'.$_GET['atak'].''];};
      if($postac['sku_tnace_b_'.$_GET['atak'].'']>0){$sku_tna=$postac['sku_tnace_b_'.$_GET['atak'].'']+($postac['sila_fizyczna']/4);}else{$sku_tna=$postac['sku_tnace_b_'.$_GET['atak'].''];};
      if($postac['sku_obuchowe_b_'.$_GET['atak'].'']>0){$sku_obu=$postac['sku_obuchowe_b_'.$_GET['atak'].'']+($postac['sila_fizyczna']/4);}else{$sku_obu=$postac['sku_obuchowe_b_'.$_GET['atak'].''];};
      if($sku_tna>$sku_klu&&$sku_tna>$sku_obu){$atak=$sku_tna-$przeciwnik['wyparowania'];};
      if($sku_klu>$sku_tna&&$sku_klu>$sku_obu){$atak=$sku_klu-$przeciwnik['wyparowania'];};
      if($sku_obu>$sku_tna&&$sku_obu>$sku_klu){$atak=$sku_obu-$przeciwnik['wyparowania'];};
    print("<BR>Uzyles: <B>'".$bron."'</B> zadajesz <B><I>".$przeciwnik['user']."</I></B> obrazen: <B><I>".$atak."</I></B><BR>");
    $wynik=mysql_query("UPDATE istoty SET obrazenia='".$atak."' WHERE user='".$przeciwnik['user']."';");};
    if($przeciwnik['obrazenia']>$przeciwnik['zywotnosc']){$wynik=mysql_query("UPDATE istoty SET aktywny=0 WHERE user='".$przeciwnik['user']."';");
      $pd=($przeciwnik["zywotnosc"]/10)*$postac['aktualny_poziom_1'];
      $wynik=mysql_query("UPDATE postac SET punkty_doswiadczenia='".$pd."' WHERE user='".$przeciwnik['user']."';");};
		  print("Wygrales!!!!<BR>");}
   else{print("Nietrafiles<BR>");};
  print("<FORM METHOD=\"GET\"><INPUT TYPE=\"hidden\" NAME=\"co\" VALUE=\"mapa\"><INPUT TYPE=\"hidden\" NAME=\"user\" VALUE='".$_GET['user']."'><INPUT TYPE=\"hidden\" NAME=\"haslo\" VALUE='".$_GET['haslo']."'><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ ATAK</I></B></TD></TR></TABLE></LEGEND>
	       Przeciwnik: <B>".$przeciwnik['user']."</B><BR><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ BRON</I></B></TD></TR></TABLE></LEGEND><BR>");
  if($przeciwnik['zywotnosc']>0){for($x=1;$x<9;$x++){if($postac['bieglosc_'.$x.'']!=""){
    $bieglosc=$postac['b_znajomosc_'.$x.'']+(($postac['sila_fizyczna']+$postac['zrecznosc'])/10);
    if($postac['sku_klute_b_'.$x.'']>0){$sku_klu=$postac['sku_klute_b_'.$x.'']+($postac['sila_fizyczna']/4);}else{$sku_klu=$postac['sku_klute_b_'.$x.''];};
    if($postac['sku_tnace_b_'.$x.'']>0){$sku_tna=$postac['sku_tnace_b_'.$x.'']+($postac['sila_fizyczna']/4);}else{$sku_tna=$postac['sku_tnace_b_'.$x.''];};
    if($postac['sku_obuchowe_b_'.$x.'']>0){$sku_obu=$postac['sku_obuchowe_b_'.$x.'']+($postac['sila_fizyczna']/4);}else{$sku_obu=$postac['sku_obuchowe_b_'.$x.''];};
	  print("<INPUT TYPE=\"radio\" NAME=\"atak\" VALUE=\"".$x."\"> '".$postac['b_bron_'.$x.'']."' '".$postac['b_specjalizacja_'.$x.'']."' Bieglosc: <B>'".$bieglosc."'</B> Opoznienie: <B>'".$postac['opoznienie_b_'.$x.'']."'</B> Atak: <I>tnace</I> <B>'".$sku_tna."'</B> <I>klute</I> <B>'".$sku_klu."'</B> <I>obuchowe</I> <B>'".$sku_obu."'</B>

	 <BR>");};};
    print("</FIELDSET><INPUT TYPE=\"submit\" VALUE=\"ATAKUJ!!!\"><BR></FIELDSET></FORM>");}
  else{print("WYGRALES!!!!<BR>");};

?>


