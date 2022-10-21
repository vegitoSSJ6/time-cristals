<?
$postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));


include("pliki/swiat/mapa_wczytaj.php");

  if($_GET['co']=="gora"){$os_x=$postac['os_x']-1; $os_y=$postac['os_y'];
                          if($mapa[$os_x][$os_y]=="m"||$mapa[$os_x][$os_y]=="w"||$mapa[$os_x][$os_y]=="c"){print("");}
                          else{tura($postac['user']); $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."' WHERE user='".$postac['user']."';");};
                          $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
  if($_GET['co']=="dol"){$os_x=$postac['os_x']+1; $os_y=$postac['os_y'];
                         if($mapa[$os_x][$os_y]=="m"||$mapa[$os_x][$os_y]=="w"||$mapa[$os_x][$os_y]=="c"){print("");}
                         else{tura($postac['user']); $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."' WHERE user='".$postac['user']."';");};
                         $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
  if($_GET['co']=="lewo"){$os_y=$postac['os_y']-1; $os_x=$postac['os_x']; 
                          if($mapa[$os_x][$os_y]=="m"||$mapa[$os_x][$os_y]=="w"||$mapa[$os_x][$os_y]=="c"){print("");}
                          else{tura($postac['user']); $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."' WHERE user='".$postac['user']."';");};
                          $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
  if($_GET['co']=="prawo"){$os_y=$postac['os_y']+1; $os_x=$postac['os_x'];
                           if($mapa[$os_x][$os_y]=="m"||$mapa[$os_x][$os_y]=="w"||$mapa[$os_x][$os_y]=="c"){print("");}
                           else{tura($postac['user']); $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."' WHERE user='".$postac['user']."';");};
                           $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};

for($x=0;$x<31;$x++){for($y=0;$y<58;$y++){if(($postac['os_x']==$x)&&($postac['os_y']==$y)){$mapa[$x][$y]=$postac['symbol'];};
    $rekord=mysql_query("SELECT*FROM istoty WHERE mapa='".$postac['mapa']."' AND aktywny='1' AND os_x='".$x."' AND os_y='".$y."';")or die("Brak polaczenia z baza istoty");
    while($istota=mysql_fetch_assoc($rekord)){print $istoty['symbol']; $mapa[$x][$y]=$istota['symbol'];};
};};
if($mapa[$postac['os_x']][$postac['os_y']]=='o'){walka($postac['user']);};
if($mapa[$postac['os_x']][$postac['os_y']]=='a'){walka($postac['user']);};
print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>");
include("pliki/postac/imie.php");
print("<BR>Rok: ".$postac['rok']." Miesiac: ".$postac['miesiac']." Dzien: ".$postac['dzien']." <BR>Godzina : ".$postac['godzina'].":".$postac['minuta'].":".$postac['sekundy']."</I></B></TD><TD><TABLE><TR><TD><I>Wspolczynniki:</I></TD><TD><I>ZYW</I></TD><TD><I>SF</I></TD><TD><I>ZR</I></TD><TD><I>SZ</I></TD><TD><I>INT</I></TD><TD><I>MD</I></TD><TD><I>UM</I></TD><TD><I>CH</I></TD><TD><I>PR</I></TD><TD><I>WI</I></TD></TR><TR><TD><I>Podstawowe:</I></TD><TD><B>".$postac['zywotnosc']."</B></TD><TD><B>".$postac['sila_fizyczna']."</B></TD><TD><B>".$postac['zrecznosc']."</B></TD><TD><B>".$postac['szybkosc']."</B></TD><TD><B>".$postac['inteligencja']."</B></TD><TD><B>".$postac['madrosc']."</B></TD><TD><B>".$postac['u_magiczne']."</B></TD><TD><B>".$postac['charyzma']."</B></TD><TD><B>".$postac['prezencja']."</B></TD><TD><B>".$postac['wiara']."</B></TD></TR>");
print("<TR><TD><I>Aktualne:</I></TD><TD><B>".$postac['zywotnosc']."</B></TD><TD><B>".$postac['sila_fizyczna']."</B></TD><TD><B>".$postac['zrecznosc']."</B></TD><TD><B>".$postac['szybkosc']."</B></TD><TD><B>".$postac['inteligencja']."</B></TD><TD><B>".$postac['madrosc']."</B></TD><TD><B>".$postac['u_magiczne']."</B></TD><TD><B>".$postac['charyzma']."</B></TD><TD><B>".$postac['prezencja']."</B></TD><TD><B>".$postac['wiara']."</B></TD></TR></TABLE></TD><TD><TABLE><TR><TD><B><I>Uzbrojenie:</I></B></TD><TD>Zna</TD><TD>S_K</TD><TD>S_T</TD><TD>S_O</TD><TD>Opu</TD><TD>At</TD></TR>");
for($x=1;$x<4;$x++){if($postac['bieglosc_'.$x.'']!=""){print("<TR><TD><B>".$postac['b_bron_'.$x.'']."</B></TD><TD>".$postac['b_znajomosc_'.$x.'']."</TD><TD>".$postac['sku_klute_b_'.$x.'']."</TD><TD>".$postac['sku_tnace_b_'.$x.'']."</TD><TD>".$postac['sku_obuchowe_b_'.$x.'']."</TD><TD>".$postac['opoznienie_b_'.$x.'']."</TD><TD>".$postac['ataki_b_'.$x.'']."</TD></TR>");};};
print("</TABLE></TD><TD><TABLE><TR><TD><B><I>Uzbrojenie:</I></B></TD><TD>Zna</TD><TD>S_K</TD><TD>S_T</TD><TD>S_O</TD><TD>Opu</TD><TD>At</TD></TR>");
for($x=4;$x<7;$x++){if($postac['bieglosc_'.$x.'']!=""){print("<TR><TD><B>".$postac['b_bron_'.$x.'']."</B></TD><TD>".$postac['b_znajomosc_'.$x.'']."</TD><TD>".$postac['sku_klute_b_'.$x.'']."</TD><TD>".$postac['sku_tnace_b_'.$x.'']."</TD><TD>".$postac['sku_obuchowe_b_'.$x.'']."</TD><TD>".$postac['opoznienie_b_'.$x.'']."</TD><TD>".$postac['ataki_b_'.$x.'']."</TD></TR>");};};
print("</TABLE></TD></TR></TABLE></LEGEND><TABLE><TR><TD></TD><TD><center><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=gora\"><img src=\"obrazy/strzalki/gora.gif\"></A></center></TD><TD></TD></TR><TR><TD><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=lewo\"><img src=\"obrazy/strzalki/lewo.gif\"></A></TD><TD><FIELDSET><LEGEND><B><I><H1>");
echo $mapa_nazwa;
print("</H1></B></I></LEGEND><table border=0>");
   for($x=0;$x<32;$x++){print("<TR border=0>"); for($y=0;$y<59;$y++){print ("<td border=0>");
       if($mapa[$x][$y]=='X'){print("<img src=\"pliki/swiat/laka.php\">");};
       if($mapa[$x][$y]=='w'){print("<img src=\"pliki/swiat/woda.php\">");};
       if($mapa[$x][$y]=='p'){print("<img src=\"pliki/swiat/piasek.php\">");};
       if($mapa[$x][$y]=='m'){print("<img src=\"pliki/swiat/mur.php\">");};
       if($mapa[$x][$y]=='c'){print("<img src=\"pliki/swiat/dom.php\">");};
       if($mapa[$x][$y]=='d'){print("<img src=\"pliki/swiat/droga.php\">");};
       if($mapa[$x][$y]=='i'){print("<img src=\"pliki/swiat/wejscie.php\">");};
       if($mapa[$x][$y]=='O'){print("<img src=\"obrazy/goku.png\">");};
       if($mapa[$x][$y]=='o'){print("<img src=\"obrazy/potwor.gif\">");};
   
       print("</td>");}; 
   print("</tr>");};
print("</table></FIELDSET></TD><TD><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=prawo\"><img src=\"obrazy/strzalki/prawo.gif\"></A></TD></TR><TR><TD></TD><TD><center><A href=\"index.php?user=".$_GET["user"]."&haslo=".$_GET["haslo"]."&co=dol\"><img src=\"obrazy/strzalki/dol.gif\"></A></center></TD><TD></TD></TR></TABLE><CENTER><TABLE><TR>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=karta_postaci&haslo=".$_GET['haslo']."\">KARTA POSTACI</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_bron&haslo=".$_GET['haslo']."\">Zakladka BRON</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_opis&haslo=".$_GET['haslo']."\">Zakladka OPIS</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");
print("</CENTER></TABLE></FIELDSET>");
?>


