<?
if($_GET['user']=="songo"){$tytul="Panel Administratora"; naglowek($tytul); include("pliki/system/panel.php");};
if($_GET['co']=="wybierz_profesje"){$tytul="Tworzenie Postaci - Wybor Profesji"; naglowek($tytul); przypisz_rase($_GET['user'], $_GET['rasa']); wybierz_profesje($_GET['user'], $_GET['rasa']);}
elseif($postac['rasa']==''){$tytul="Tworzenie Postaci - Wybor Rasy"; naglowek($tytul); wybierz_rase();}
elseif($_GET['co']=="wybierz_2_profesje"){$tytul="Tworzenie Postaci - Wybor 2 Profesji"; naglowek($tytul); wybierz_2_profesje($_GET['user'], $_GET['rasa'], $_GET['profesja']);}
elseif($_GET['co']=="wybierz_charakter"){$tytul="Tworzenie Postaci - Wybor Charakteru"; naglowek($tytul); if($_GET['profesja']=="Polbog"||$_GET['profesja']=="Wiedzmin"){przypisz_profesje1($_GET['user'], $_GET['profesja']);}
                                           								  else{przypisz_profesje2($_GET['user'], $_GET['profesja'], $_GET['profesja2']);}; wybierz_charakter($_GET['user']);}
elseif($_GET['co']=="wybierz_boga"){$tytul="Tworzenie Postaci - Wybor Boga"; naglowek($tytul); wybierz_boga($_GET['charakter_1'], $_GET['charakter_2']);}
elseif($_GET['co']=="kp_ekwipunek"){$tytul="Karta Postaci - Ekwipunek"; naglowek($tytul); kp_ekwipunek($_GET['user']);}
elseif($_GET['co']=="kp_bron"){$tytul="Karta Postaci - Uzbrojenie"; naglowek($tytul); kp_bron($_GET['user']);}
elseif($_GET['co']=="kp_info"){$tytul="Karta Postaci - Info"; naglowek($tytul); kp_info($_GET['user']);}
elseif($_GET['co']=="karta_postaci"){$tytul="Karta Postaci - Przeglad"; naglowek($tytul); karta_postaci($_GET['user']);}
elseif($_GET['co']=="mapa"){$tytul="Mapa"; naglowek($tytul); mapa();}
elseif($_GET['co']=="gora"){$tytul="Mapa"; naglowek($tytul); mapa();}
elseif($_GET['co']=="dol"){$tytul="Mapa"; naglowek($tytul); mapa();}
elseif($_GET['co']=="prawo"){$tytul="Mapa"; naglowek($tytul); mapa();}
elseif($_GET['co']=="lewo"){$tytul="Mapa"; naglowek($tytul); mapa();}
else{$tytul="Karta Postaci"; naglowek($tytul); karta_postaci($_GET['user']);}
?>







