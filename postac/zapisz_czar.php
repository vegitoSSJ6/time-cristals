<?
$czarp=mysql_fetch_assoc(mysql_query("SELECT*FROM czary WHERE nazwa='".$_GET['czar']."';"));
$czar_z=mysql_query("INSERT INTO postac_czary (user,rodzaj,typ,nazwa,krag,punkty_magii,czas_rzucania,zasieg,czas_dzialania,obszar_dzialania,opis) VALUES('".$postac['user']."','".$czarp['rodzaj']."','".$czarp['typ']."','".$czarp['nazwa']."','".$czarp['krag']."','".$czarp['punkty_magii']."','".$czarp['czas_rzucania']."','".$czarp['zasieg']."','".$czarp['czas_dzialania']."','".$czarp['obszar_dzialania']."','".$czarp['opis']."');");

?>