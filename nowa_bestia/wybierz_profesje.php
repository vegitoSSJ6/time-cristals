<?
  htmlspecialchars($rasa);
  $rekord=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));
  $wynik=mysql_query("SELECT*FROM profesje;")or die("niemozna polaczyc z baza profesje");
  print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>TWOJA POSTAC</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><CENTER><IMG SRC=".$rekord['rasa_obraz']."></CENTER></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$rekord['tytul']." ".$_GET['user']."</I></B></TD></TR></TABLE></LEGEND>Status Spoleczny: </B>".$rekord['status_spoleczny']."<BR><B>Rasa: </B>".$rekord['rasa']."<BR><BR><B>".$rekord['rasa_info']."<BR><BR><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=5>wiek: ".$rekord['wiek']." - ".$rekord['wiek_max']."<BR>wzrost: ".$rekord['wzrost']."<BR>waga: ".$rekord['waga']."</TD><TD rowspan=2>Wspolczynniki Rasowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$rekord['zywotnosc']."</B></TD><TD><B>".$rekord['sila_fizyczna']."</B></TD><TD><B>".$rekord['zrecznosc']."</B></TD><TD><B>".$rekord['szybkosc']."</B></TD><TD><B>".$rekord['inteligencja']."</B></TD><TD><B>".$rekord['madrosc']."</B></TD><TD><B>".$rekord['u_magiczne']."</B></TD><TD><B>".$rekord['charyzma']."</B></TD><TD><B>".$rekord['prezencja']."</B></TD><TD><B>".$rekord['wiara']."</B></TD></TR><TR>");
  for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
  print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$rekord['odpornosc_'.$i.'']."</B></TD>");};
  print("</tr></table><table><tr><td valign=top><B>Obrona: </B>".$rekord['obrona']."<BR><B>Wyparowania: </B>".$rekord['wyparowania']."<BR><B>Infrawizja: </B>".$rekord['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$rekord['samozdrowienie']."<BR>wyleczone rany co 8godz<BR></td><td valign=top><B>Bieglosci w Broni :<BR></B>");
  for($i=1;$i<11;$i++){if($rekord['bieglosc_'.$i.'']!=""){print("- ".$rekord['bieglosc_'.$i.'']." - ".$rekord['b_znajomosc_'.$i.'']." %<BR>");};};
  print("<BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($rekord['jezyk_'.$i.'']!=""){print("- ".$rekord['jezyk_'.$i.'']." - ".$rekord['znajomosc_'.$i.'']." %<BR>");};};
  print("</td></tr></table></FIELDSET></TD></TABLE></center></FIELDSET><BR><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ PROFESJE</I></B></TD></TR></TABLE></LEGEND><TABLE CELLPADING=5 BORDER=1>");
  while($rekord_p=mysql_fetch_assoc($wynik))
    {if($rekord_p['nazwa']=="Gwardzista"&&$rasa=="Hobbit"){}
      elseif($rekord_p['nazwa']=="Barbarzynca"&&($rasa=="Elf"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
      elseif($rekord_p['nazwa']=="Wiedzmin"&&($rasa=="Pol Olbrzym"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
      elseif($rekord_p['nazwa']=="Rycerz"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
      elseif($rekord_p['nazwa']=="Paladyn"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
      elseif($rekord_p['nazwa']=="Czarny Rycerz"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
      elseif($rekord_p['nazwa']=="Zlodziej"&&$rasa=="Reptylion"){}
      elseif($rekord_p['nazwa']=="Zabojca"&&($rasa=="Gnom"||$rasa=="Hobbit")){}
      elseif($rekord_p['nazwa']=="Druid"&&($rasa=="Krasnolud"||$rasa=="Reptylion")){}
      elseif($rekord_p['nazwa']=="Polbog"&&$rasa=="Krasnolud"){}
      elseif($rekord_p['nazwa']=="Astrolog"&&($rasa=="Elf"||$rasa=="Pol Elf")){}
      elseif($rekord_p['nazwa']=="Mag"&&($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
      elseif($rekord_p['nazwa']=="Czarnoksieznik"&&($rasa=="Reptylion"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
      elseif($rekord_p['nazwa']=="Iluzjonista"&&($rasa=="Elf"||$rasa=="Krasnolud")){}
      elseif($rekord_p['nazwa']=="Alchemik"&&($rasa=="Elf"||$rasa=="Pol Olbrzym"||$rasa=="Krasnolud"||$rasa=="Hobbit")){}
else{ if($rekord_p['nazwa']=="Wiedzmin"||$rekord_p['nazwa']=="Polbog"){print"<TR><TD><A HREF=\"index.php?co=wybierz_charakter&imie=".$_GET['user']."&profesja=".$rekord_p['nazwa']."\">WYBIERZ</A></TD><TD><CENTER><img src=".$rekord_p['plik_gif']."></CENTER></TD><TD>";
      }else{print("<TR><TD><A HREF=\"index.php?user=".$_GET['user']."&haslo=".$_GET['haslo']."&co=wybierz_2_profesje&profesja=".$rekord_p['nazwa']."\">WYBIERZ</A></TD><TD><CENTER><img src=".$rekord_p['plik_gif']."></CENTER></TD><TD>");};
     print("<fieldset><legend><table border><tr><td><b><i><B>KASTA: ".$rekord_p['kasta']."</B><BR>PROFESJA: ".$rekord_p['nazwa']."</i>");
  if($rekord_p['nazwa']=="Wojownik"){if($rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Lowca"){if($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Gwardzista"){if($rasa=="Elf"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Barbarzynca"){if($rasa=="Pol Elf"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Wiedzmin"){if($rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Paladyn"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Zlodziej"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Zabojca"){if($rasa=="Krasnolud"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Kupiec"){if($rasa=="Elf"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Bard"){if($rasa=="Gnom"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Krasnolud"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Kaplan"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Druid"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Astrolog"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Mag"){if($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Czarnoksieznik"){if($rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p['nazwa']=="Iluzjonista"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Hobbit"||$rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p['nazwa']=="Alchemik"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  print("</b></td></tr></table></legend><TABLE CELLPADING=5 BORDER=1 align=\"right\"><TR><TD rowspan=2>Wspolczynniki Podstawowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR>");
     wypisz_wspolczynniki($rekord_p['zywotnosc'], $rekord_p['zywotnosc_dodatek']);
     wypisz_wspolczynniki($rekord_p['sila_fizyczna'], $rekord_p['sila_fizyczna_dodatek']);
     wypisz_wspolczynniki($rekord_p['zrecznosc'], $rekord_p['zrecznosc_dodatek']);
     wypisz_wspolczynniki($rekord_p['szybkosc'], $rekord_p['szybkosc_dodatek']);
     wypisz_wspolczynniki($rekord_p['inteligencja'], $rekord_p['inteligencja_dodatek']);
     wypisz_wspolczynniki($rekord_p['madrosc'], $rekord_p['madrosc_dodatek']);
     wypisz_wspolczynniki($rekord_p['u_magiczne'], $rekord_p['u_magiczne_dodatek']);
     wypisz_wspolczynniki($rekord_p['charyzma'], $rekord_p['charyzma_dodatek']);
     wypisz_wspolczynniki($rekord_p['prezencja'], $rekord_p['prezencja_dodatek']);
     wypisz_wspolczynniki($rekord_p['wiara'], $rekord_p['wiara_dodatek']);
     print("</TR><TR><TD><B>Przyrost co level :</B></TD><TD><B><center>".$rekord_p['zywotnosc_next']."</center></B></TD><TD><B><center>".$rekord_p['sila_fizyczna_next']."</center></B></TD><TD><B><center>".$rekord_p['zrecznosc_next']."</center></B></TD><TD><B><center>".$rekord_p['szybkosc_next']."</center></B></TD><TD><B><center>".$rekord_p['inteligencja_next']."</center></B></TD><TD><B><center>".$rekord_p['madrosc_next']."</center></B></TD><TD><B><center>".$rekord_p['u_magiczne_next']."</center></B></TD><TD><B><center>".$rekord_p['charyzma_next']."</center></B></TD><TD><B><center>".$rekord_p['prezencja_next']."</center></B></TD><TD><B><center>".$rekord_p['wiara_next']."</center></B></TD></TR></TD></TR>");
  for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
  print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){wypisz_wspolczynniki($rekord_p['odpornosc_'.$i.''], $rekord_p['odpornosc_'.$i.'_dodatek']);};
   print("</tr></table><p align=justify>Ilosc Startowa Bieglosci: ".$rekord_p['bieglosci_ilosc_start']."<br>Minimalna Startowa Bieglosci: ".$rekord_p['bieglosci_minimum']."%<br><br>".$rekord_p['info']."</p><BR></fieldset></TD></TR>");};};
  print"</TABLE></FIELDSET>";
?>


