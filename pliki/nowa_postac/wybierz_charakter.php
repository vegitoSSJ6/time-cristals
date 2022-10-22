<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));
  htmlspecialchars($postac['profesja_1']);
  htmlspecialchars($postac['profesja_2']);
  print("<FORM METHOD=\"GET\"><INPUT TYPE=\"hidden\" NAME=\"co\" VALUE=\"wybierz_boga\"><INPUT TYPE=\"hidden\" NAME=\"user\" VALUE='".$_GET['user']."'><INPUT TYPE=\"hidden\" NAME=\"haslo\" VALUE='".$_GET['haslo']."'>");
  print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ CHARAKTER</I></B></TD></TR></TABLE></LEGEND>");
  if($postac['profesja_1']=="Lowca"||$postac['profesja_2']=="Lowca"){print("Jedna z Profesji to Lowca,<BR>Jeslli bedziesz chcial w przyszlosci rzucac i pozyskiwac czary od Druidow,<BR>musisz miec charakter Dobry lub Neutralny");};
  print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WZGLEDEM PRAWA</I></B></TD></TR></TABLE></LEGEND>");

  if($postac['profesja_1']!="Druid"&&$postac['profesja_2']!="Druid"&&$postac['profesja_1']!="Zlodziej"&&$postac['profesja_2']!="Zlodziej"&&$postac['profesja_1']!="Barbarzynca"&&$postac['profesja_2']!="Barbarzynca"&&$postac['profesja_1']!="Wiedzmin"){print("<INPUT TYPE=radio NAME=\"charakter1\" VALUE=\"Praworzadny\">  Praworzadny<BR><BR>");};
  if($postac['kasta_1']!="Rycerz"&&$postac['kasta_2']!="Rycerz"&&$postac['profesja_1']!="Gwardzista"&&$postac['profesja_2']!="Gwardzista"){print("<INPUT TYPE=radio NAME=\"charakter1\" VALUE=\"Neutralny\">  Neutralny<BR><BR>");};
  if($postac['profesja_1']!="Druid"&&$postac['profesja_2']!="Druid"&&$postac['profesja_1']!="Kupiec"&&$postac['profesja_2']!="Kupiec"&&$postac['kasta_1']!="Rycerz"&&$postac['kasta_2']!="Rycerz"&&$postac['profesja_1']!="Gwardzista"&&$postac['profesja_2']!="Gwardzista"&&$postac['profesja_1']!="Wiedzmin"){print("<INPUT TYPE=radio NAME=\"charakter1\" VALUE=\"Chaotyczny\">  Chaotyczny<BR><BR>");};

  print("</FIELDSET><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WZGLEDEM MORALNOSCI</I></B></TD></TR></TABLE></LEGEND>");

if($postac['profesja_1']!="Czarnoksieznik"&&$postac['profesja_2']!="Czarnoksieznik"&&$postac['profesja_1']!="Druid"&&$postac['profesja_2']!="Druid"&&$postac['profesja_1']!="Zabojca"&&$postac['profesja_2']!="Zabojca"&&$postac['profesja_1']!="Czarny Rycerz"&&$postac['profesja_2']!="Czarny Rycerz"){print("<INPUT TYPE=radio NAME=\"charakter2\" VALUE=\"Dobry\">  Dobry<BR><BR>");};
if($postac['profesja_1']!="Czarnoksieznik"&&$postac['profesja_2']!="Czarnoksieznik"&&$postac['profesja_1']!="Czarny Rycerz"&&$postac['profesja_2']!="Czarny Rycerz"&&$postac['profesja_1']!="Paladyn"&&$postac['profesja_2']!="Paladyn"){print("<INPUT TYPE=radio NAME=\"charakter2\" VALUE=\"Neutralny\">  Neutralny<BR><BR>");};
if($postac['profesja_1']!="Druid"&&$postac['profesja_2']!="Druid"&&$postac['profesja_1']!="Paladyn"&&$postac['profesja_2']!="Paladyn"){print("<INPUT TYPE=radio NAME=\"charakter2\" VALUE=\"Zly\">  Zly<BR><BR>");};

  print("</FIELDSET><INPUT TYPE=\"submit\" VALUE=\"ZAGRAJ\"><BR></FIELDSET></FORM>");


?>


