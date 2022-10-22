<?
  htmlspecialchars($rasa);
  $rekord=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));
  $rekord_p1=mysql_fetch_assoc(mysql_query("SELECT*FROM profesje WHERE nazwa='".$profesja."';"));
  $wynik=mysql_query("SELECT*FROM profesje;")or die("niemozna polaczyc z baza profesje");
  print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>TWOJA POSTAC</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><CENTER><img src=".$rekord['rasa_obraz']."></CENTER></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$rekord['tytul']." ".$_GET['user']."</I></B></TD></TR></TABLE></LEGEND>Status Spoleczny: </B>".$rekord['status_spoleczny']."<BR><B>Rasa: </B>".$rekord['rasa']."<BR><B>".$rekord['rasa_info']."<BR><BR><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=5>wiek: ".$rekord['wiek']." - ".$rekord['wiek_max']."<BR>wzrost: ".$rekord['wzrost']."<BR>waga: ".$rekord['waga']."</TD><TD rowspan=2>Wspolczynniki Rasowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR><TD><B>".$rekord['zywotnosc']."</B></TD><TD><B>".$rekord['sila_fizyczna']."</B></TD><TD><B>".$rekord['zrecznosc']."</B></TD><TD><B>".$rekord['szybkosc']."</B></TD><TD><B>".$rekord['inteligencja']."</B></TD><TD><B>".$rekord['madrosc']."</B></TD><TD><B>".$rekord['u_magiczne']."</B></TD><TD><B>".$rekord['charyzma']."</B></TD><TD><B>".$rekord['prezencja']."</B></TD><TD><B>".$rekord['wiara']."</B></TD></TR><TR>");
  for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
  print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){print("<TD><B>".$rekord['odpornosc_'.$i.'']."</B></TD>");};
  print("</tr></table><table><tr><td valign=top><B>Obrona: </B>".$rekord['obrona']."<BR><B>Wyparowania: </B>".$rekord['wyparowania']."<BR><B>Infrawizja: </B>".$rekord['infrawizja']." <B>SZ</B><BR><B>Samozdrowienie: </B>".$rekord['samozdrowienie']."<BR>wyleczone rany co 8godz<BR></td><td valign=top><B>Bieglosci w Broni :<BR></B>");
  for($i=1;$i<11;$i++){if($rekord['bieglosc_'.$i.'']!=""){print("- ".$rekord['bieglosc_'.$i.'']." - ".$rekord['b_znajomosc_'.$i.'']." %<BR>");};};
  print("<BR></td><td valign=top><B>Znajomosc Jezykow :<BR></B>");
  for($i=1;$i<6;$i++){if($rekord['jezyk_'.$i.'']!=""){print("- ".$rekord['jezyk_'.$i.'']." - ".$rekord['znajomosc_'.$i.'']." %<BR>");};};
  print("</td></tr></table></FIELDSET></TD></TABLE></center></FIELDSET><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBRANA 1 PROFESJA</I></B></TD></TR></TABLE></LEGEND><TABLE CELLPADING=5 BORDER=1><TD><CENTER><img src=".$rekord_p1['plik_gif']."></CENTER></TD><TD><fieldset><legend><table border><tr><td><b><i><B>KASTA: ".$rekord_p1['kasta']."</B><BR>PROFESJA: ".$rekord_p1['nazwa']."</i>");
  if($rekord_p1['nazwa']=="Wojownik"){if($rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Lowca"){if($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Gwardzista"){if($rasa=="Elf"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Barbarzynca"){if($rasa=="Pol Elf"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Wiedzmin"){if($rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Paladyn"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Zlodziej"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Zabojca"){if($rasa=="Krasnolud"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Kupiec"){if($rasa=="Elf"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Bard"){if($rasa=="Gnom"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Krasnolud"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Kaplan"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Druid"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Astrolog"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Mag"){if($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Czarnoksieznik"){if($rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
  if($rekord_p1['nazwa']=="Iluzjonista"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Hobbit"||$rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  if($rekord_p1['nazwa']=="Alchemik"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
  print("</b></td></tr></table></legend><TABLE CELLPADING=5 BORDER=1 align=\"right\"><TR><TD rowspan=2>Wspolczynniki Podstawowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR>");
  wypisz_wspolczynniki($rekord_p1['zywotnosc'], $rekord_p1['zywotnosc_dodatek']);
  wypisz_wspolczynniki($rekord_p1['sila_fizyczna'], $rekord_p1['sila_fizyczna_dodatek']);
  wypisz_wspolczynniki($rekord_p1['zrecznosc'], $rekord_p1['zrecznosc_dodatek']);
  wypisz_wspolczynniki($rekord_p1['szybkosc'], $rekord_p1['szybkosc_dodatek']);
  wypisz_wspolczynniki($rekord_p1['inteligencja'], $rekord_p1['inteligencja_dodatek']);
  wypisz_wspolczynniki($rekord_p1['madrosc'], $rekord_p1['madrosc_dodatek']);
  wypisz_wspolczynniki($rekord_p1['u_magiczne'], $rekord_p1['u_magiczne_dodatek']);
  wypisz_wspolczynniki($rekord_p1['charyzma'], $rekord_p1['charyzma_dodatek']);
  wypisz_wspolczynniki($rekord_p1['prezencja'], $rekord_p1['prezencja_dodatek']);
  wypisz_wspolczynniki($rekord_p1['wiara'], $rekord_p1['wiara_dodatek']);
  print("</TR><TR><TD><B>Przyrost co level :</B></TD><TD><B><center>".$rekord_p1['zywotnosc_next']."</center></B></TD><TD><B><center>".$rekord_p1['sila_fizyczna_next']."</center></B></TD><TD><B><center>".$rekord_p1['zrecznosc_next']."</center></B></TD><TD><B><center>".$rekord_p1['szybkosc_next']."</center></B></TD><TD><B><center>".$rekord_p1['inteligencja_next']."</center></B></TD><TD><B><center>".$rekord_p1['madrosc_next']."</center></B></TD><TD><B><center>".$rekord_p1['u_magiczne_next']."</center></B></TD><TD><B><center>".$rekord_p1['charyzma_next']."</center></B></TD><TD><B><center>".$rekord_p1['prezencja_next']."</center></B></TD><TD><B><center>".$rekord_p1['wiara_next']."</center></B></TD></TR></TD></TR>");
  for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
  print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
  for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
  print("</TR><TR>");
  for($i=1;$i<11;$i++){wypisz_wspolczynniki($rekord_p1['odpornosc_'.$i.''], $rekord_p1['odpornosc_'.$i.'_dodatek']);};
  print("</tr></table><p align=justify>Ilosc Startowa Bieglosci: ".$rekord_p1['bieglosci_ilosc_start']."<br>Minimalna Startowa Bieglosci: ".$rekord_p1['bieglosci_minimum']."%<br><br>".$rekord_p1['info']."</p><BR></fieldset></TD>");
  print("</TABLE></FIELDSET><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ 2 PROFESJE</I></B></TD></TR></TABLE></LEGEND><TABLE CELLPADING=5 BORDER=1>");
  while($rekord_p2=mysql_fetch_assoc($wynik))
   {if($rekord_p2['nazwa']==$rekord_p1['nazwa']||$rekord_p2['nazwa']=="Wiedzmin"||$rekord_p2['nazwa']=="Polbog"){}
    elseif($rekord_p1['nazwa']=="Wojownik"&&$rekord_p2['kasta']=="Zolnierz"){}
    elseif($rekord_p1['nazwa']=="Lowca"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Druid"&&$rekord_p2['nazwa']!="Mag"){}
    elseif($rekord_p1['nazwa']=="Gwardzista"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kaplan"){}
    elseif($rekord_p1['nazwa']=="Barbarzynca"&&$rekord_p2['nazwa']!="Zlodziej"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kaplan"){}
    elseif($rekord_p1['nazwa']=="Rycerz"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Kaplan"){}
    elseif($rekord_p1['nazwa']=="Paladyn"&&$rekord_p2['nazwa']!="Astrolog"){}
    elseif($rekord_p1['nazwa']=="Czarny Rycerz"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Kaplan"){}
    elseif($rekord_p1['nazwa']=="Zlodziej"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Barbarzynca"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Zabojca"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Gwardzista"&&$rekord_p2['nazwa']!="Barbarzynca"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Czarnoksieznik"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Kupiec"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Lowca"&&$rekord_p2['nazwa']!="Barbarzynca"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Czarnoksieznik"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Bard"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Barbarzynca"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Kaplan"&&$rekord_p2['kasta']!="Zolnierz"&&$rekord_p2['nazwa']!="Rycerz"&&$rekord_p2['nazwa']!="Czarny Rycerz"&&$rekord_p2['kasta']!="Zlodziej"&&$rekord_p2['kasta']!="Czarodziej"){}
    elseif($rekord_p1['nazwa']=="Druid"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Lowca"&&$rekord_p2['nazwa']!="Mag"){}
    elseif($rekord_p1['nazwa']=="Astrolog"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Czarnoksieznik"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Mag"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Lowca"&&$rekord_p2['nazwa']!="Zlodziej"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Druid"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Czarnoksieznik"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Czarnoksieznik"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Druid"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Iluzjonista"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Iluzjonista"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Zlodziej"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Czarnoksieznik"&&$rekord_p2['nazwa']!="Alchemik"){}
    elseif($rekord_p1['nazwa']=="Alchemik"&&$rekord_p2['nazwa']!="Wojownik"&&$rekord_p2['nazwa']!="Zlodziej"&&$rekord_p2['nazwa']!="Zabojca"&&$rekord_p2['nazwa']!="Kupiec"&&$rekord_p2['nazwa']!="Kaplan"&&$rekord_p2['nazwa']!="Astrolog"&&$rekord_p2['nazwa']!="Mag"&&$rekord_p2['nazwa']!="Czarnoksieznik"){}
    elseif($rekord_p2['nazwa']=="Gwardzista"&&$rasa=="Hobbit"){}
    elseif($rekord_p2['nazwa']=="Wojownik"&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
    elseif($rekord_p2['nazwa']=="Barbarzynca"&&($rasa=="Elf"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
    elseif($rekord_p2['nazwa']=="Rycerz"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
    elseif($rekord_p2['nazwa']=="Paladyn"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
    elseif($rekord_p2['nazwa']=="Czarny Rycerz"&&($tytul=="El"||$tytul=="")&&($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"||$rasa=="Reptylion")){}
    elseif($rekord_p2['nazwa']=="Zlodziej"&&$rasa=="Reptylion"){}
    elseif($rekord_p2['nazwa']=="Zabojca"&&($rasa=="Gnom"||$rasa=="Hobbit")){}
    elseif($rekord_p2['nazwa']=="Druid"&&($rasa=="Krasnolud"||$rasa=="Reptylion")){}
    elseif($rekord_p2['nazwa']=="Astrolog"&&($rasa=="Elf"||$rasa=="Pol Elf")){}
    elseif($rekord_p2['nazwa']=="Mag"&&($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
    elseif($rekord_p2['nazwa']=="Czarnoksieznik"&&($rasa=="Reptylion"||$rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit")){}
    elseif($rekord_p2['nazwa']=="Iluzjonista"&&($rasa=="Elf"||$rasa=="Krasnolud")){}
    elseif($rekord_p2['nazwa']=="Alchemik"&&($rasa=="Elf"||$rasa=="Pol Olbrzym"||$rasa=="Krasnolud"||$rasa=="Hobbit")){}
    else{print("<TR><TD><A HREF=\"index.php?co=wybierz_charakter&user=".$_GET['user']."&haslo=".$_GET['haslo']."&profesja1=".$rekord_p1['nazwa']."&profesja2=".$rekord_p2['nazwa']."\">WYBIERZ</A></TD><TD><CENTER><img src=".$rekord_p2['plik_gif']."></CENTER></TD><TD>");
     print("<fieldset><legend><table border><tr><td><b><i><B>KASTA: ".$rekord_p2['kasta']."</B><BR>PROFESJA: ".$rekord_p2['nazwa']."</i>");
     if($rekord_p2['nazwa']=="Wojownik"){if($rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Lowca"){if($rasa=="Krasnolud"||$rasa=="Gnom"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Gwardzista"){if($rasa=="Elf"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Barbarzynca"){if($rasa=="Pol Elf"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Paladyn"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Zlodziej"){if($rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Zabojca"){if($rasa=="Krasnolud"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Kupiec"){if($rasa=="Elf"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Bard"){if($rasa=="Gnom"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Krasnolud"||$rasa=="Hobbit"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Kaplan"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Druid"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Astrolog"){if($rasa=="Hobbit"||$rasa=="Pol Olbrzym"||$rasa=="Pol Ork"){print"<BR>Max Poziom Rozwoju : 10";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Mag"){if($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Czarnoksieznik"){if($rasa=="Pol Olbrzym"){print"<BR>Max Poziom Rozwoju : 15";};};
     if($rekord_p2['nazwa']=="Iluzjonista"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Hobbit"||$rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
     if($rekord_p2['nazwa']=="Alchemik"){if($rasa=="Pol Elf"||$rasa=="Pol Ork"||$rasa=="Gnom"){print"<BR>Max Poziom Rozwoju : 15";}elseif($rasa=="Reptylion"){print"<BR>Max Poziom Rozwoju : 10";};};
     print("</b></td></tr></table></legend><TABLE CELLPADING=5 BORDER=1 align=\"right\"><TR><TD rowspan=2>Wspolczynniki Podstawowe :</TD><TD><B>ZW</B></TD><TD><B>SF</B></TD><TD><B>ZR</B></TD><TD><B>SZ</B></TD><TD><B>INT</B></TD><TD><B>MD</B></TD><TD><B>UM</B></TD><TD><B>CH</B></TD><TD><B>PR</B></TD><TD><B>WI</B></TD></TR><TR>");
     wypisz_wspolczynniki($rekord_p2['zywotnosc'], $rekord_p2['zywotnosc_dodatek']);
     wypisz_wspolczynniki($rekord_p2['sila_fizyczna'], $rekord_p2['sila_fizyczna_dodatek']);
     wypisz_wspolczynniki($rekord_p2['zrecznosc'], $rekord_p2['zrecznosc_dodatek']);
     wypisz_wspolczynniki($rekord_p2['szybkosc'], $rekord_p2['szybkosc_dodatek']);
     wypisz_wspolczynniki($rekord_p2['inteligencja'], $rekord_p2['inteligencja_dodatek']);
     wypisz_wspolczynniki($rekord_p2['madrosc'], $rekord_p2['madrosc_dodatek']);
     wypisz_wspolczynniki($rekord_p2['u_magiczne'], $rekord_p2['u_magiczne_dodatek']);
     wypisz_wspolczynniki($rekord_p2['charyzma'], $rekord_p2['charyzma_dodatek']);
     wypisz_wspolczynniki($rekord_p2['prezencja'], $rekord_p2['prezencja_dodatek']);
     wypisz_wspolczynniki($rekord_p2['wiara'], $rekord_p2['wiara_dodatek']);
     print("</TR><TR><TD><B>Przyrost co level :</B></TD><TD><B><center>".$rekord_p2['zywotnosc_next']."</center></B></TD><TD><B><center>".$rekord_p2['sila_fizyczna_next']."</center></B></TD><TD><B><center>".$rekord_p2['zrecznosc_next']."</center></B></TD><TD><B><center>".$rekord_p2['szybkosc_next']."</center></B></TD><TD><B><center>".$rekord_p2['inteligencja_next']."</center></B></TD><TD><B><center>".$rekord_p2['madrosc_next']."</center></B></TD><TD><B><center>".$rekord_p2['u_magiczne_next']."</center></B></TD><TD><B><center>".$rekord_p2['charyzma_next']."</center></B></TD><TD><B><center>".$rekord_p2['prezencja_next']."</center></B></TD><TD><B><center>".$rekord_p2['wiara_next']."</center></B></TD></TR></TD></TR>");
     for($i=1;$i<12;$i++){print("<TD><center><B>--</B></center></TD>");};
     print("</tr><tr><td rowspan=2><center>odpornosci:</center></td>");
     for($i=1;$i<11;$i++){print("<TD><B>".$i."</B></TD>");};
     print("</TR><TR>");
     for($i=1;$i<11;$i++){wypisz_wspolczynniki($rekord_p2['odpornosc_'.$i.''], $rekord_p2['odpornosc_'.$i.'_dodatek']);};
     print("</tr></table><p align=justify>Ilosc Startowa Bieglosci: ".$rekord_p2['bieglosci_ilosc_start']."<br>Minimalna Startowa Bieglosci: ".$rekord_p2['bieglosci_minimum']."%<br><br>".$rekord_p2['info']."</p><BR></fieldset>");};};
  print"</TD></TR></TABLE></FIELDSET>";
?>


