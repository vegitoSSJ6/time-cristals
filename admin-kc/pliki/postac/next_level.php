<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM istoty WHERE user='".$_GET['user']."';"));

if($postac['aktualny_poziom_1']>18){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+10000; if($krag_magii>10){$krag_magii=11;};

}elseif($postac['aktualny_poziom_1']>13&&$postac['aktualny_poziom_1']<19){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+5000;

}elseif($postac['aktualny_poziom_1']>8&&$postac['aktualny_poziom_1']<14){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+2500;

}elseif($postac['aktualny_poziom_1']==8){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+1000;

}elseif($postac['aktualny_poziom_1']==7){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+1500;

}elseif($postac['aktualny_poziom_1']>3&&$postac['aktualny_poziom_1']<7){$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+250;

}else{$aktualny_poziom=$postac['aktualny_poziom_1']+1; $krag_magii=$aktualny_poziom/2; $pd_do_next_level=$postac['pd_do_next_level_1']+50;

};

  $wynik=mysql_query("UPDATE istoty SET rasa='".$rasa['nazwa']."',rasa_obraz='".$obraz."',zywotnosc='".$rasa['zywotnosc']."',sila_fizyczna='".$rasa['sila_fizyczna']."',zrecznosc='".$rasa['zrecznosc']."',szybkosc='".$rasa['szybkosc']."',inteligencja='".$rasa['inteligencja']."',madrosc='".$rasa['madrosc']."',u_magiczne='".$rasa['u_magiczne']."',charyzma='".$rasa['charyzma']."',prezencja='".$rasa['prezencja']."',wiara='".$rasa['wiara']."',odpornosc_1='".$rasa['odpornosc_1']."',odpornosc_2='".$rasa['odpornosc_2']."',odpornosc_3='".$rasa['odpornosc_3']."',odpornosc_4='".$rasa['odpornosc_4']."',odpornosc_5='".$rasa['odpornosc_5']."',odpornosc_6='".$rasa['odpornosc_6']."',odpornosc_7='".$rasa['odpornosc_7']."',odpornosc_8='".$rasa['odpornosc_8']."',odpornosc_9='".$rasa['odpornosc_9']."',odpornosc_10='".$rasa['odpornosc_10']."',wiek='".$rasa['wiek']."',wiek_max='".$rasa['wiek_max']."',wzrost='".$wzrost."',waga='".$waga."',obrona='".$rasa['obrona']."',wyparowania='".$rasa['wyparowania']."',samozdrowienie='".$rasa['samozdrowienie']."',infrawizja='".$rasa['infrawizja']."',rasa_info='".$rasa['opis']."',rasa_historia='".$rasa['historia']."',jezyk_1='".$rasa['jezyk_1']."',znajomosc_1='".$rasa['znajomosc_1']."',jezyk_2='".$rasa['jezyk_2']."',znajomosc_2='".$rasa['znajomosc_2']."',jezyk_3='".$rasa['jezyk_3']."',znajomosc_3='".$rasa['znajomosc_3']."',jezyk_4='".$rasa['jezyk_4']."',znajomosc_4='".$rasa['znajomosc_4']."',jezyk_5='".$rasa['jezyk_5']."',znajomosc_5='".$rasa['znajomosc_5']."',bieglosc_1='".$rasa['bieglosc_1']."',b_znajomosc_1='".$rasa['b_znajomosc_1']."',bieglosc_2='".$rasa['bieglosc_2']."',b_znajomosc_2='".$rasa['b_znajomosc_2']."',bieglosc_3='".$rasa['bieglosc_3']."',b_znajomosc_3='".$rasa['b_znajomosc_3']."',bieglosc_4='".$rasa['bieglosc_4']."',b_znajomosc_4='".$rasa['b_znajomosc_4']."',bieglosc_5='".$rasa['bieglosc_5']."',b_znajomosc_5='".$rasa['b_znajomosc_5']."',bieglosc_6='".$rasa['bieglosc_6']."',b_znajomosc_6='".$rasa['b_znajomosc_6']."',bieglosc_7='".$rasa['bieglosc_7']."',b_znajomosc_7='".$rasa['b_znajomosc_7']."',bieglosc_8='".$rasa['bieglosc_8']."',b_znajomosc_8='".$rasa['b_znajomosc_8']."',bieglosc_9='".$rasa['bieglosc_9']."',b_znajomosc_9='".$rasa['b_znajomosc_9']."',bieglosc_10='".$rasa['bieglosc_10']."',b_znajomosc_10='".$rasa['b_znajomosc_10']."' WHERE user='".$_GET['user']."';");


?>


