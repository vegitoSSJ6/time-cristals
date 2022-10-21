<?
  $wynik=mysql_query("SELECT*FROM rasy;")or die("Brak polaczenia z baza rasy");
  
  print("<FORM METHOD=\"GET\"><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>Wybierz Rase dla Postaci ktora bedziesz gral :</I></B></TD></TR></TABLE></LEGEND><TABLE CELLPADING=5 BORDER=1>");
  while($rekord=mysql_fetch_assoc($wynik))
    {print("<TR><TD><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=wybierz_profesje&rasa=".$rekord['nazwa']."\">Wybierz</A></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$rekord['nazwa']."</I></B></TD></TR></TABLE></LEGEND><BR><P ALIGN=justify>".$rekord['opis']."</P><BR><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=5>wiek: ".$rekord['wiek']." - ".$rekord['wiek_max']."<BR>wzrost: ".$rekord['wzrost']."<BR>waga: ".$rekord['waga']."</TD><TD rowspan=2>Wspolczynniki Rasowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$rekord['zywotnosc']."</B></TD><TD><B>".$rekord['sila_fizyczna']."</B></TD><TD><B>".$rekord['zrecznosc']."</B></TD><TD><B>".$rekord['szybkosc']."</B></TD><TD><B>".$rekord['inteligencja']."</B></TD><TD><B>".$rekord['madrosc']."</B></TD><TD><B>".$rekord['u_magiczne']."</B></TD><TD><B>".$rekord['charyzma']."</B></TD><TD><B>".$rekord['prezencja']."</B></TD><TD><B>".$rekord['wiara']."</B></TD></TR><TR>");
  for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
  print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$rekord['odpornosc_'.$i.'']."</B></TD>");};
  print("</table><table><tr><td valign=top><B>Obrona: </B>".$rekord['obrona']."<BR><B>Wyparowania: </B>".$rekord['wyparowania']."<BR><B>Infrawizja: </B>".$rekord['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$rekord['samozdrowienie']."<BR>wyleczone rany co 8godz<BR></td><td valign=top><B>Bieglosci w Broni :<BR></B>");
  for($i=1;$i<11;$i++){if($rekord['bieglosc_'.$i.'']!=""){print("- ".$rekord['bieglosc_'.$i.'']." - ".$rekord['b_znajomosc_'.$i.'']." %<BR>");};};
  print("<BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($rekord['jezyk_'.$i.'']!=""){print("- ".$rekord['jezyk_'.$i.'']." - ".$rekord['znajomosc_'.$i.'']." %<BR>");};};
  print("</td></tr></table></TR></FIELDSET></TD></TR></TABLE></FIELDSET></FORM>");}
?>


