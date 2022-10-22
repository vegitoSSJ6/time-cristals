<?
if($postac['madrosc']/10>$czary){
 if($postac['kasta_1']=="Czarodziej"||$postac['kasta_1']=="Kleryk"){
  if($postac['profesja_1']=="Kaplan"){$rodzaj="Kaplanski";};
  if($postac['profesja_1']=="Druid"){$rodzaj="Druidyczny";};
  if($postac['profesja_1']=="Astrolog"){$rodzaj="Astrologiczny";};
  if($postac['profesja_1']=="Pol Bog"){$rodzaj="Polboski";};
  if($postac['profesja_1']=="Mag"){$rodzaj="Magów";};
  if($postac['profesja_1']=="Czarnoksieznik"){$rodzaj="Czarnoksieski";};
  if($postac['profesja_1']=="Iluzjonista"){$rodzaj="Iluzjonistyczny";};
  if($postac['profesja_1']=="Alchemik"){$rodzaj="Alchemiczny";};
  $poziom=$postac['aktualny_poziom_1']/2;};
 if($postac['kasta_2']=="Czarodziej"||$postac['kasta_2']=="Kleryk"){
  if($postac['profesja_2']=="Kaplan"){$rodzaj="Kaplanski";};
  if($postac['profesja_2']=="Druid"){$rodzaj="Druidyczny";};
  if($postac['profesja_2']=="Astrolog"){$rodzaj="Astrologiczny";};
  if($postac['profesja_2']=="Mag"){$rodzaj="Magów";};
  if($postac['profesja_2']=="Czarnoksieznik"){$rodzaj="Czarnoksieski";};
  if($postac['profesja_2']=="Iluzjonista"){$rodzaj="Iluzjonistyczny";};
  if($postac['profesja_2']=="Alchemik"){$rodzaj="Alchemiczny";};
  $poziom=$postac['aktualny_poziom_2']/2;};
 $wynik_c=mysql_query("SELECT*FROM czary WHERE rodzaj='".$rodzaj."' AND krag<='".$poziom."';");
 print("<FORM METHOD=\"GET\"><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>Wybierz Czar ktor chcesz siê nauczyæ :</I></B></TD></TR></TABLE></LEGEND><TABLE CELLPADING=5 BORDER=1>");
 while($zaklecie=mysql_fetch_assoc($wynik_c)){


 $wynik_p=mysql_query("SELECT 1 WHERE EXISTS (SELECT * FROM postac_czary WHERE user='".$postac['user']."' AND nazwa='".$zaklecie['nazwa']."';");

$sprawdz=mysql_result($query, 0,0);


  if($sprawdz>0){print("");}
  else{print("<TR><TD><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=zapisz_czar&czar=".$zaklecie['nazwa']."\">Wybierz</A></TD><TD><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>".$zaklecie['nazwa']."</I></B></TD></TR></TABLE></LEGEND><BR><P ALIGN=justify>".$zaklecie['opis']."</P><BR><TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"><TR><TD rowspan=5>Rodzaj: ".$zaklecie['rodzaj']."<BR>Typ: ".$zaklecie['typ']."</TD><TD rowspan=2>Podstawowe Dane :</TD><TD><B>Kr¹g</B></TD><TD><B>Punkty Magii</B></TD><TD><B>Czas Rzucania</B></TD><TD><B>Zasieg</B></TD><TD><B>Czas Dzialania</B></TD><TD><B>Obszar</B></TD></TR><TR><TD><B>".$zaklecie['krag']."</B></TD><TD><B>".$zaklecie['punkty_magii']."</B></TD><TD><B>".$zaklecie['czas_rzucania']."</B></TD><TD><B>".$zaklecie['zasieg']."</B></TD><TD><B>".$zaklecie['czas_dzialania']."</B></TD><TD><B>".$zaklecie['obszar_dzialania']."</B></TD></TR>");
  print("</TABLE></FIELDSET></FORM>");};};};
?>


