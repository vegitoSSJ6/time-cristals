<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM istoty WHERE user='".$_GET['user']."';"));

print("<FIELDSET><LEGEND><TABLE BORDER><TR><TD><B><I>KARTA POSTACI - UZBROJENIE</I></B></TD></TR></TABLE></LEGEND><CENTER><TABLE CELLPADING=5 BORDER=1><TD><FIELDSET>");
print("<TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"> </TR><td valign=top><B>Bieglosci w Broni :<BR></B></TD><td valign=top><B>Bron przy sobie :</B></TD><TD><B>typ</B></TD><TD><B>zasieg</B></TD><TD><B>waga</B></TD><TD><B>opoznienie</B></TD><TD><B>sku_klute</B></TD><TD><B>sku_tnace</B></TD><TD><B>sku_obuchowe</B></TD><TD><B>uszk.</B></TD><TD><B>wyt.</B></TD><TD><B>obrona</B></TD><TD><B>ataki</B></TD></TR>");
for($i=1;$i<11;$i++){if($postac['bieglosc_'.$i.'']!=""){print("<TR><TD>- ".$postac['bieglosc_'.$i.'']." - ".$postac['b_specjalizacja_'.$i.'']." - ".$postac['b_znajomosc_'.$i.'']." %</TD><TD>- ".$postac['b_bron_'.$i.'']."</TD><TD> ".$postac['typ_b_'.$i.'']."</TD><TD> - ".$postac['zasieg_b_'.$i.'']." </TD><TD> - ".$postac['waga_b_'.$i.'']." </TD><TD> - ".$postac['opoznienie_b_'.$i.'']." </TD><TD> - ".$postac['sku_klute_b_'.$i.'']." </TD><TD> - ".$postac['sku_tnace_b_'.$i.'']." </TD><TD> - ".$postac['sku_obuchowe_b_'.$i.'']." </TD><TD> - ".$postac['uszkodzenia_b_'.$i.'']." </TD><TD> - ".$postac['wytrzymalosc_b_'.$i.'']." </TD><TD> - ".$postac['obrona_b_'.$i.'']." </TD><TD> - ".$postac['ataki_b_'.$i.'']." </TD>");};};
print("</TR></table><BR>");

print("<TABLE CELLPADING=5 BORDER=1 ALIGN=\"center\"> </TR><td valign=top><B>Zalorzona Zbroja :<BR></B></TD><td valign=top><B>Ograniczenie Zrecznosci:</B></TD><TD><B>Ograniczenie Szybkosci:</B></TD><TD><B>Wyparowania Klute:</B></TD><TD><B>Wyparowania Tnace:</B></TD><TD><B>Wyparowania Obuchowe:</B></TD><TD><B>Obrona:</B></TD><TD><B>Wytrzymalosc</B></TD><TD><B>Waga</B></TD><TD><B>Wsp_Od</B></TD></TR>");
print("<TR><TD><B>Tarcza:</B> ".$postac['tarcza_nazwa']." - ".$postac['tarcza_rodzaj']." </TD><TD>- ".$postac['tarcza_ogr_zr']."</TD><TD> - ".$postac['tarcza_ogr_sz']."</TD><TD> - </TD><TD> - </TD><TD> - </TD><TD> - ".$postac['tarcza_obrona']." </TD><TD> - ".$postac['tarcza_wytrzymalosc']." </TD><TD> - ".$postac['tarcza_waga']." </TD><TD> - ".$postac['tarcza_wp_odp']." </TD></TR>");
print("<TR><TD><B>Chelm:</B> ".$postac['chelm_nazwa']." </TD><TD>- ".$postac['chelm_ogr_zr']."</TD><TD> - ".$postac['chelm_ogr_sz']."</TD><TD> - ".$postac['chelm_wyp_kl']." </TD><TD> - ".$postac['chelm_wyp_tn']." </TD><TD> - ".$postac['chelm_wyp_ob']." </TD><TD> - ".$postac['chelm_obrona']." </TD><TD> - ".$postac['chelm_wytrzymalosc']." </TD><TD> - ".$postac['chelm_waga']." </TD><TD> - ".$postac['chelm_wp_odp']." </TD></TR>");
print("<TR><TD><B>Zbroja:</B> ".$postac['zbroja_nazwa']." - ".$postac['zbroja_rodzaj']." </TD><TD>- ".$postac['zbroja_ogr_zr']."</TD><TD> - ".$postac['zbroja_ogr_sz']."</TD><TD> - ".$postac['zbroja_wyp_kl']." </TD><TD> - ".$postac['zbroja_wyp_tn']." </TD><TD> - ".$postac['zbroja_wyp_ob']." </TD><TD> - ".$postac['zbroja_obrona']." </TD><TD> - ".$postac['zbroja_wytrzymalosc']." </TD><TD> - ".$postac['zbroja_waga']." </TD><TD> - ".$postac['zbroja_wp_odp']." </TD></TR>");
print("<TR><TD><B>Zbroja Dodatek 1:</B> ".$postac['z_d_1_nazwa']." </TD><TD>- ".$postac['z_d_1_ogr_zr']."</TD><TD> - ".$postac['z_d_1_ogr_sz']."</TD><TD> - ".$postac['z_d_1_wyp_kl']." </TD><TD> - ".$postac['z_d_1_wyp_tn']." </TD><TD> - ".$postac['z_d_1_wyp_ob']." </TD><TD> - ".$postac['z_d_1_obrona']." </TD><TD> - ".$postac['z_d_1_wytrzymalosc']." </TD><TD> - ".$postac['z_d_1_waga']." </TD><TD> - ".$postac['z_d_1_wp_odp']." </TD></TR>");
print("<TR><TD><B>Zbroja Dodatek 2:</B> ".$postac['z_d_2_nazwa']." </TD><TD>- ".$postac['z_d_2_ogr_zr']."</TD><TD> - ".$postac['z_d_2_ogr_sz']."</TD><TD> - ".$postac['z_d_2_wyp_kl']." </TD><TD> - ".$postac['z_d_2_wyp_tn']." </TD><TD> - ".$postac['z_d_2_wyp_ob']." </TD><TD> - ".$postac['z_d_2_obrona']." </TD><TD> - ".$postac['z_d_2_wytrzymalosc']." </TD><TD> - ".$postac['z_d_2_waga']." </TD><TD> - ".$postac['z_d_2_wp_odp']." </TD></TR>");
print("</table><BR><BR><CENTER><table><TR>");

print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=karta_postaci&haslo=".$_GET['haslo']."\">Zakladka PRZEGLAD</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_opis&haslo=".$_GET['haslo']."\">Zakladka OPIS</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=kp_info&haslo=".$_GET['haslo']."\">Zakladka INFO</A></TD>");
print("<TD><A HREF=\"index.php?user=".$postac['user']."&co=mapa&haslo=".$_GET['haslo']."\">MAPA</A></TD>");


print("</TR></table></CENTER></table></FIELDSET></TD></TABLE>");
?>


