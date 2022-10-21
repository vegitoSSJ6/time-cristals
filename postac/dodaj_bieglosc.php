<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$imie."';"));
$bieglosci=$postac['bieglosci_ilosc_start_1']+$postac['bieglosci_ilosc_start_2'];
print("<FORM METHOD=\"GET\"><INPUT TYPE=\"hidden\" NAME=\"co\" VALUE=\"karta_postaci\"><INPUT TYPE=\"hidden\" NAME=\"user\" VALUE='".$_GET['user']."'><INPUT TYPE=\"hidden\" NAME=\"haslo\" VALUE='".$_GET['haslo']."'><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>PODNIES BIEGLOSC</I></B></TD></TR></TABLE></LEGEND><FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>WYBIERZ BRON</I></B></TD></TR></TABLE></LEGEND>Wolne Bieglosci: '".$bieglosci."'<BR>");
  for($x=1;$x<9;$x++){if($postac['bieglosc_'.$x.'']!=""){
 print("<INPUT TYPE=radio NAME=\"bieglosc_".$x."\" VALUE=\"");
  if($postac['b_specjalizacja_'.$x.'']=="Biegly"){print("Podwojnie Biegly");}
   elseif($postac['b_specjalizacja_'.$x.'']=="Podwojnie Biegly"){print("Specjalista");}
   elseif($postac['b_specjalizacja_'.$x.'']=="Specjalista"){print("Podwojny Specjalista");}
   elseif($postac['b_specjalizacja_'.$x.'']=="Podwojny Specjalista"){print("Mistrz");}
  else{print("Wielki Mistrz");};
print("\"> ");
print $postac['bieglosc_'.$x.''];
 if($postac['b_specjalizacja_'.$x.'']=="Biegly"){print(" - Podwojnie Biegly");}
  elseif($postac['b_specjalizacja_'.$x.'']=="Podwojnie Biegly"){print(" - Specjalista");}
  elseif($postac['b_specjalizacja_'.$x.'']=="Specjalista"){print(" - Podwojny Specjalista");}
  elseif($postac['b_specjalizacja_'.$x.'']=="Podwojny Specjalista"){print(" - Mistrz");}
 else{print(" - Wielki Mistrz");};
 print("<BR>");};};
print("</FIELDSET></FIELDSET><INPUT TYPE=\"submit\" VALUE=\"PODNIES BIEGLOSC\"><BR></FIELDSET></FORM>");




?>


