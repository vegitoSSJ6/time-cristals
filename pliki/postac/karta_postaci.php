<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));
  if($_GET['bog']!=''){include("zapisz_boga.php");};
  if($_GET['co']=='zapisz_czar'){include("zapisz_czar.php");};

$czary=0;
if(($postac['kasta_1']=="Czarodziej"||$postac['kasta_2']=="Czarodziej"||$postac['kasta_1']=="Kleryk"||$postac['kasta_2']=="Kleryk")&&($postac['madrosc']/10>$czary+0.9)){include("pliki/postac/dodaj_czar.php");};

  if($postac['punkty_doswiadczenia']>$postac['pd_do_next_level_1']){next_level($_GET['user']);};
include("przypisz_bieglosc.php");
  if($postac['bieglosci_ilosc_start_1']>=1||$postac['bieglosci_ilosc_start_2']>=1){dodaj_bieglosc($_GET['user']);};
$baz_psy=$postac['bazowa_psychiczna']+(($postac['inteligencja']+$postac['madrosc'])/10)+($postac['zywotnosc']/20);
$baz_fiz=$postac['bazowa_fizyczna']+(($postac['zywotnosc']+$postac['sila_fizyczna'])/10);
$ene_zyc=($postac['zywotnosc']+$postac['sila_fizyczna']+$postac['zrecznosc']+$postac['szybkosc']+$postac['inteligencja']+$postac['madrosc']+$postac['u_magiczne']+$postac['prezencja']+$postac['charyzma']+$postac['wiara'])/10;
$wytrzymalosc=($postac['zywotnosc']+$postac['sila_fizyczna'])/10;
$sila_fiz_wolna=$postac['sila_fizyczna'];

print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>KARTA POSTACI</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><CENTER><BR>");
  if($postac['kasta_2']==""){print("<IMG SRC=".$postac['profesja_1_obraz'].">");}else{print("<IMG SRC=".$postac['profesja_1_obraz']."><BR><IMG SRC=".$postac['profesja_2_obraz'].">");};
print("</CENTER></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>");
include("imie.php");
print("</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD>RASA : <B>".$postac['rasa']."</B></TD>");
if($postac['kasta_2']!=""){print("<TD rowspan=2>KASTA 1 : <B>".$postac['kasta_1']."</B><BR>PROFESJA 1 : <B>".$postac['profesja_1']."</B></TD><TD rowspan=2>KASTA 2 : <B>".$postac['kasta_2']."</B><BR>PROFESJA 2 : <B>".$postac['profesja_2']."</B></TD><TD rowspan=2><B>Aktualny Poziom:</B><BR><B>".$postac['aktualny_poziom_1']." / ".$postac['aktualny_poziom_2']."</B></TD><TD><B>Energia Zyciowa: ".$ene_zyc."</B></TD></TR><TR><TD><B>PD: ".$postac['punkty_doswiadczenia']."</B></TD>
                                  <TD><B>Wolna SF: ".$sila_fiz_wolna."</B></TD></TR><TR>");
}else{print("<TD>PROFESJA 1 : <B>".$postac['profesja_1']."</B></TD><TD rowspan=2>KASTA 1 : <B>".$postac['kasta_1']."</B></TD></TR><TR>");};
if($postac['kasta_2']==""){print("<TD><B>Aktualny Poziom:</B></TD><TD colspan=2><B>".$postac['aktualny_poziom_1']."</B></TD></TR><TR>");};
if($postac['kasta_2']==""){print("<TD><B>Punkty Doswiadczenia:</B></TD><TD colspan=2><B>".$postac['punkty_doswiadczenia']."</B></TD></TR><TR>");};
print("<TD><B>Charakter :</B></TD><TD><B>Prawo: </B>".$postac['charakter1']."</TD><TD><B>Moralnosc: </B>".$postac['charakter2']."</TD><TD><B>Zawod: ".$postac['zawod']."</B></TD><TD><B>Obrazenia: ".$postac['obrazenia']."</B></TD></TR></TABLE><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=2><H4><B>Wspolczynniki Podstawowe :</B></H4></TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$postac['zywotnosc']."</B></TD><TD><B>".$postac['sila_fizyczna']."</B></TD><TD><B>".$postac['zrecznosc']."</B></TD><TD><B>".$postac['szybkosc']."</B></TD><TD><B>".$postac['inteligencja']."</B></TD><TD><B>".$postac['madrosc']."</B></TD><TD><B>".$postac['u_magiczne']."</B></TD><TD><B>".$postac['charyzma']."</B></TD><TD><B>".$postac['prezencja']."</B></TD><TD><B>".$postac['wiara']."</B></TD></TR><TR><TD colspan=11></TD></tr><tr><td rowspan=4><center><H4><B>Odpornosci:</B></H2></center></td><TD colspan=5><B>Baz.Psych: ".$baz_psy."</B></TD><TD colspan=5><B>Baz.Fizy: ".$baz_fiz."</B></TD></TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
print("</TR><TR>");
  for($i=1;$i<11;$i++){if($i<6){$x=$baz_psy+$postac['odpornosc_'.$i.''];
                                  if($i==1){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['inteligencja']/10);};
                                  if($i==2){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['madrosc']/10);};
                                  if($i==3){$x=$baz_psy+$postac['odpornosc_'.$i.'']+($postac['wiara']/10);};
                                print("<TD><B>".$x."</B></TD>");};
                       if($i>5){$x=$baz_fiz+$postac['odpornosc_'.$i.'']; print("<TD><B>".$x."</B></TD>");};};
print("</tr></table><table><tr><td valign=top><B>Zauwazenie: </B>".$postac['zauwazenie']."<BR><B>Obrona: </B>".$postac['obrona']."<BR><B>Wyparowania: </B>".$postac['wyparowania']."<BR><B>Infrawizja: </B>".$postac['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$postac['samozdrowienie']."<BR>wyleczone rany po 8godz snu<BR></td><BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($postac['jezyk_'.$i.'']!=""){print("- ".$postac['jezyk_'.$i.'']." - ".$postac['znajomosc_'.$i.'']." %<BR>");};};
print("</td><td>"); for($x=1;$x<11;$x++){print("".$x." <b>".$postac['u_nazwa_p1_'.$x.'']."</b><br>");};
if($postac['aktualny_poziom_1']>0){print("</td><td>"); for($x=11;$x<19;$x++){print("".$x." <b>".$postac['u_nazwa_p1_'.$x.'']."</b><br>");};};
if($postac['aktualny_poziom_1']>10){for($x=19;$x<21;$x++){print("".$x." <b>".$postac['u_nazwa_p1_'.$x.'']."</b><br>");};};
print("</td><td>"); for($x=1;$x<11;$x++){print("".$x." <b>".$postac['u_nazwa_p2_'.$x.'']."</b><br>");};
if($postac['aktualny_poziom_2']>0){print("</td><td>"); for($x=11;$x<19;$x++){print("".$x." <b>".$postac['u_nazwa_p2_'.$x.'']."</b><br>");};};
if($postac['aktualny_poziom_2']>10){for($x=19;$x<21;$x++){print("".$x." <b>".$postac['u_nazwa_p2_'.$x.'']."</b><br>");};};
print("</td></tr></table><TABLE><TR>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_bron&haslo=".$_GET['haslo']."\">Zakladka BRON</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_ekwipunek&haslo=".$_GET['haslo']."\">Zakladka EKWIPUNEK</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_info&haslo=".$_GET['haslo']."\">Zakladka INFO</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");
print("</tr></table></FIELDSET></TD></TR></TABLE></center><BR><TR>");


?>