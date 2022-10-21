<?
 function wybierz_boga($charakter_1,$charakter_2){include("pliki/nowa_postac/wybierz_boga.php");}
 function wybierz_charakter($imie){include("pliki/nowa_postac/wybierz_charakter.php");}
 function losuj_miasto_u(){include("pliki/nowa_postac/losuj_miasto_u.php"); return $m_urodzenia;}
 function losuj_zawod($status_spoleczny){include("pliki/nowa_postac/losuj_zawod.php"); return $zawod;}
 function losuj_majatek($status_spoleczny){include("pliki/nowa_postac/losuj_majatek.php"); return $zloto;}
 function losuj_tytul($status_spoleczny){include("pliki/nowa_postac/losuj_tytul.php"); return $tytul;}
 function losuj_status_spoleczny(){include("pliki/nowa_postac/losuj_status_spoleczny.php"); return $status_spoleczny;}
 function przypisz_profesje2($imie, $profesja1, $profesja2){include("pliki/nowa_postac/przypisz_profesje2.php");}
 function wybierz_2_profesje($imie, $rasa, $profesja){include("pliki/nowa_postac/wybierz_2_profesje.php");}
 function przypisz_profesje1($imie, $profesja){include("pliki/nowa_postac/przypisz_profesje1.php");}
 function wybierz_profesje($imie, $rasa){include("pliki/nowa_postac/wybierz_profesje.php");}
 function przypisz_rase($imie, $rasa){include("pliki/nowa_postac/przypisz_rase.php");}
 function wybierz_rase(){include("pliki/nowa_postac/wybierz_rase.php");}
 function wybor_postaci_info(){include("pliki/nowa_postac/wybor_postaci_info.php");}
 function wypisz_wspolczynniki($wspolczynnik, $dodatek){print"<TD><B><center>"; if($dodatek!='+'){print"$wspolczynnik";} elseif($wspolczynnik!=0){print"$wspolczynnik"; print"$dodatek";} else{print"$dodatek";}; print("</center></B></TD>");}
 function dodaj_postac($imie,$password,$email){$wynik=mysql_query("INSERT INTO istoty (user,haslo,u_email) VALUES('".$imie."','".$password."','".$email."');");}


?>


