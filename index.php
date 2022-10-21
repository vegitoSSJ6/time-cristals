<?
  require('funkcje.php');
  mysql_connect("localhost","root","krasnal")or die("niemozna polaczyc z mysql");
  mysql_select_db("krysztaly_czasu")or die("niemozna polaczyc z krysztalami czasu");
  if($_GET['co']=="dodaj_konto"){dodaj_postac($_GET['user'],$_GET['haslo'],$_GET['u_email']);};
  if($_GET['user']!=''){$postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));
			if($postac["haslo"]==$_GET["haslo"]){include("pliki/system/zalogowany.php");}
			else{$tytul="Strona G³ówna"; naglowek($tytul); log_error(); login(); strona_glowna();};}
  elseif($_GET['co']=="zarejestruj"){$tytul="Rejestracja"; naglowek($tytul); formularz_r();}
  elseif($_GET['co']=="wybor_postaci_info"){$tytul="Info"; naglowek($tytul); wybor_postaci_info();}
  else{$tytul="Strona G³ówna"; naglowek($tytul); login(); strona_glowna();};
  stopka();
?>


