<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM istoty WHERE user='".$_GET['user']."';"));

  print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>KARTA POSTACI - INFO</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><CENTER><BR>");
if($postac['kasta_2']==""){print("<IMG SRC=".$postac['profesja_1_obraz'].">");}else{print("<IMG SRC=".$postac['profesja_1_obraz']."><BR><IMG SRC=".$postac['profesja_2_obraz'].">");};
print("</CENTER></TD><TD><FIELDSET><TABLE><TR><TD><B>Status Spoleczny: </B>".$postac['status_spoleczny']."</TD><TD><B>Zawod: </B>".$postac['zawod']."</TD></TR><TR>");
if($postac['kasta_2']==""){print("<TD colspan=2>Info o Profesji ".$postac['profesja_1']." : <BR>".$postac['profesja_1_info']."<BR></TD></TR><TR>");}
else{print("<TD colspan=2>Info o Profesji ".$postac['profesja_1']." : <BR>".$postac['profesja_1_info']."<BR><BR>");print("Info o Profesji ".$postac['profesja_2']." : <BR>".$postac['profesja_2_info']."<BR></TD></TR><TR>");};
print("<TD colspan=2><BR>Info o rasie ".$postac['rasa']." : ".$postac['rasa_info']." <BR></TD></TR><CENTER><TABLE><TR>");

print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=karta_postaci&haslo=".$_GET['haslo']."\">Zakladka PRZEGLAD</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_bron&haslo=".$_GET['haslo']."\">Zakladka BRON</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_opis&haslo=".$_GET['haslo']."\">Zakladka OPIS</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");

print("</TR></TABLE></CENTER></table></FIELDSET></TD></TABLE>");









?>


