<?
 $kon="Kon Juczny";
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac_istoty WHERE user='".$_GET['user']."' AND nazwa='".$kon."';"));

print("<FIELDSET align=\"LEFT\"><LEGEND><TABLE  align=\"LEFT\" BORDER><TR><TD><B><I>KARTA POSTACI</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE BORDER=1><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$kon."</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD>RASA : <B>".$postac['nazwa']."</B></TD><TD><B>Aktualny Poziom:</B></TD><TD colspan=2><B>".$postac['aktualny_poziom_1']."</B></TD></TR><TR><TD><B>Punkty Doswiadczenia:</B></TD><TD colspan=2><B>".$postac['punkty_doswiadczenia']."</B></TD></TR><TR><TD><B>Charakter :</B></TD><TD>".$postac['charakter1']."</TD><TD>".$postac['charakter2']."</TD><TD><B>Obrazenia: ".$postac['obrazenia']."</B></TD></TR></TABLE><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=2><H4><B>Wspolczynniki Podstawowe :</B></H4></TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$postac['zywotnosc']."</B></TD><TD><B>".$postac['sila_fizyczna']."</B></TD><TD><B>".$postac['zrecznosc']."</B></TD><TD><B>".$postac['szybkosc']."</B></TD><TD><B>".$postac['inteligencja']."</B></TD><TD><B>".$postac['madrosc']."</B></TD><TD><B>".$postac['u_magiczne']."</B></TD><TD><B>".$postac['charyzma']."</B></TD><TD><B>".$postac['prezencja']."</B></TD><TD><B>".$postac['wiara']."</B></TD></TR><TR><TD colspan=11></TD></tr><tr><td rowspan=4><center><H4><B>Odpornosci:</B></H2></center></td><TD colspan=5><B>Baz.Psych: ".$baz_psy."</B></TD><TD colspan=5><B>Baz.Fizy: ".$baz_fiz."</B></TD></TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){if($i<6){$x=$baz_psy+$postac['odpornosc_'.$i.''];
   if($i==1){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['inteligencja']/10);};
   if($i==2){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['madrosc']/10);};
   if($i==3){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['wiara']/10);};
 print("<TD><B>".$x."</B></TD>");};if($i>5){$x=$baz_fiz+$postac['odpornosc_'.$i.'']; print("<TD><B>".$x."</B></TD>");};};
 print("</tr></table><table><tr><td valign=top><B>Zauwazenie: </B>".$postac['zauwazenie']."<BR><B>Obrona: </B>".$postac['obrona']."<BR><B>Wyparowania: </B>".$postac['wyparowania']."<BR><B>Infrawizja: </B>".$postac['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$postac['samozdrowienie']."<BR>wyleczone rany po 8godz snu<BR></td><BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($postac['jezyk_'.$i.'']!=""){print("- ".$postac['jezyk_'.$i.'']." - ".$postac['znajomosc_'.$i.'']." %<BR>");};};
 print("</td></tr></table><TABLE><TR>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_bron&haslo=".$_GET['haslo']."\">Zakladka BRON</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_ekwipunek&haslo=".$_GET['haslo']."\">Zakladka EKWIPUNEK</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_info&haslo=".$_GET['haslo']."\">Zakladka INFO</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");

  print("</tr></table></FIELDSET></TD></TR></TABLE></center><BR><TR>");
?>


