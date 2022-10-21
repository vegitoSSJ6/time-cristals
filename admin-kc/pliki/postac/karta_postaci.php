<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM istoty WHERE user='".$_GET['user']."';"));


if($_GET['bog']!=''){
  $bog=mysql_fetch_assoc(mysql_query("SELECT*FROM bogowie WHERE nazwa='".$_GET['bog']."';"));
  $wynik=mysql_query("UPDATE istoty SET bog_nazwa='".$bog['nazwa']."',bog_symbol='".$bog['symbol']."',bog_info='".$bog['info']."' WHERE user='".$postac['user']."';");
};


print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>KARTA POSTACI</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><CENTER><BR>");
if($postac['kasta_2']==""){print("<IMG SRC=".$postac['profesja_1_obraz'].">");}else{print("<IMG SRC=".$postac['profesja_1_obraz']."><BR><IMG SRC=".$postac['profesja_2_obraz'].">");};
print("</CENTER></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$postac['tytul']." ".$postac['user']."</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD>RASA : <B>".$postac['rasa']."</B></TD>");
if($postac['kasta_2']!=""){print("<TD>PROFESJA 1 : <B>".$postac['profesja_1']."</B></TD><TD>PROFESJA 2 : <B>".$postac['profesja_2']."</B></TD></TR><TR><TD></TD>
                                  <TD>KASTA 1 : <B>".$postac['kasta_1']."</B></TD><TD>KASTA 2 : <B>".$postac['kasta_2']."</B></TD></TR><TR>");
}else{print("<TD>PROFESJA 1 : <B>".$postac['profesja_1']."</B></TD><TD>KASTA 1 : <B>".$postac['kasta_1']."</B></TD></TR><TR>");};
if($postac['kasta_2']==""){print("<TD><B>Aktualny Poziom:</B></TD><TD colspan=2><B>".$postac['aktualny_poziom_1']."</B></TD></TR><TR>");}
else{print("<TD><B>Aktualny Poziom:</B></TD><TD colspan=2><B>".$postac['aktualny_poziom_1']." / ".$postac['aktualny_poziom_2']."</B></TD></TR><TR>");};
if($postac['kasta_2']==""){print("<TD><B>Punkty Doswiadczenia:</B></TD><TD colspan=2><B>".$postac['punkty_doswiadczenia']."</B></TD></TR><TR>");}
else{print("<TD><B>Punkty Doswiadczenia:</B></TD><TD colspan=2><B>".$postac['punkty_doswiadczenia']."</B></TD></TR><TR>");};
print("<TD><B>Charakter :</B></TD><TD>".$postac['charakter1']."</TD><TD>".$postac['charakter2']."</TD></TR></TABLE>");
print("<TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=2><H4><B>Wspolczynniki Podstawowe :</B></H4></TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$postac['zywotnosc']."</B></TD><TD><B>".$postac['sila_fizyczna']."</B></TD><TD><B>".$postac['zrecznosc']."</B></TD><TD><B>".$postac['szybkosc']."</B></TD><TD><B>".$postac['inteligencja']."</B></TD><TD><B>".$postac['madrosc']."</B></TD><TD><B>".$postac['u_magiczne']."</B></TD><TD><B>".$postac['charyzma']."</B></TD><TD><B>".$postac['prezencja']."</B></TD><TD><B>".$postac['wiara']."</B></TD></TR><TR><TD colspan=11></TD>");
print("</tr><tr><td rowspan=4><center><H4><B>Odpornosci:</B></H2></center></td><TD colspan=5><B>Baz.Fiz:</B></TD><TD colspan=5><B>Baz.Psych:</B></TD></TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){if($i<6){$x=$postac['bazowa_psychiczna']+$postac['odpornosc_'.$i.'']; print("<TD><B>".$x."</B></TD>");};if($i>5){$x=$postac['bazowa_fizyczna']+$postac['odpornosc_'.$i.'']; print("<TD><B>".$x."</B></TD>");};};
  print("</tr></table><table><tr><td valign=top><B>Zauwazenie: </B>".$postac['zauwazenie']."<BR><B>Obrona: </B>".$postac['obrona']."<BR><B>Wyparowania: </B>".$postac['wyparowania']."<BR><B>Infrawizja: </B>".$postac['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$postac['samozdrowienie']."<BR>wyleczone rany po 8godz snu<BR></td>");
  print("<BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($postac['jezyk_'.$i.'']!=""){print("- ".$postac['jezyk_'.$i.'']." - ".$postac['znajomosc_'.$i.'']." %<BR>");};};
  print("</td></tr></table><TABLE><TR>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_bron&haslo=".$_GET['haslo']."\">Zakladka BRON</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_opis&haslo=".$_GET['haslo']."\">Zakladka OPIS</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_info&haslo=".$_GET['haslo']."\">Zakladka INFO</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");

  print("</tr></table></FIELDSET></TD></TR></TABLE></center><BR><TR>");











?>


