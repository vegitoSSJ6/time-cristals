<?

 if($_GET['bieglosc_1']!=""){$bieglosc=$_GET['bieglosc_1']; $b_znajomosc=$postac['b_znajomosc_1']; include("zapisz_bieglosc.php"); 
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_1='".$_GET['bieglosc_1']."',b_znajomosc_1='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_2']!=""){$bieglosc=$_GET['bieglosc_2']; $b_znajomosc=$postac['b_znajomosc_2']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_2='".$_GET['bieglosc_2']."',b_znajomosc_2='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_3']!=""){$bieglosc=$_GET['bieglosc_3']; $b_znajomosc=$postac['b_znajomosc_3']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_3='".$_GET['bieglosc_3']."',b_znajomosc_3='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_4']!=""){$bieglosc=$_GET['bieglosc_4']; $b_znajomosc=$postac['b_znajomosc_4']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_4='".$_GET['bieglosc_4']."',b_znajomosc_4='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_5']!=""){$bieglosc=$_GET['bieglosc_5']; $b_znajomosc=$postac['b_znajomosc_5']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_5='".$_GET['bieglosc_5']."',b_znajomosc_5='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_6']!=""){$bieglosc=$_GET['bieglosc_6']; $b_znajomosc=$postac['b_znajomosc_6']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_6='".$_GET['bieglosc_6']."',b_znajomosc_6='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_7']!=""){$bieglosc=$_GET['bieglosc_7']; $b_znajomosc=$postac['b_znajomosc_7']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_7='".$_GET['bieglosc_7']."',b_znajomosc_7='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_8']!=""){$bieglosc=$_GET['bieglosc_8']; $b_znajomosc=$postac['b_znajomosc_8']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_8='".$_GET['bieglosc_8']."',b_znajomosc_8='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};
 if($_GET['bieglosc_9']!=""){$bieglosc=$_GET['bieglosc_9']; $b_znajomosc=$postac['b_znajomosc_9']; include("zapisz_bieglosc.php");
$wynik=mysql_query("UPDATE postac SET b_specjalizacja_9='".$_GET['bieglosc_9']."',b_znajomosc_9='".$b_znajomosc."',punkty_doswiadczenia='".$pd."' WHERE user='".$postac['user']."';");};



?>


