<?

if($postac['mapa']=='plac'&&$postac['os_x']==0){$mapa_nazwa="Srebrna"; $os_x=29;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='plac'&&$postac['os_x']==30){$mapa_nazwa="krocze_i"; $os_x=1;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='plac'&&$postac['os_y']==0){$mapa_nazwa="Palac"; $os_y=53;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Srebrna'&&$postac['os_x']==30){$mapa_nazwa="plac"; $os_x=1;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Srebrna'&&$postac['os_y']==0){$mapa_nazwa="Zlota"; $os_y=53;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Zlota'&&$postac['os_x']==30){$mapa_nazwa="Poludniowa_i"; $os_x=1;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Zlota'&&$postac['os_y']==54){$mapa_nazwa="Srebrna"; $os_y=1;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Poludniowa_i'&&$postac['os_x']==30){$mapa_nazwa="Poludniowa_ii"; $os_x=1;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Poludniowa_i'&&$postac['os_x']==0){$mapa_nazwa="Zlota"; $os_x=29;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Poludniowa_i'&&$postac['os_y']==54){$mapa_nazwa="Palac"; $os_y=1;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Poludniowa_ii'&&$postac['os_y']==54){$mapa_nazwa="krocze_i"; $os_y=1;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='Poludniowa_ii'&&$postac['os_x']==0){$mapa_nazwa="Poludniowa_i"; $os_x=29;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='krocze_i'&&$postac['os_y']==0){$mapa_nazwa="Poludniowa_ii"; $os_y=53;  $wynik=mysql_query("UPDATE postac SET os_y='".$os_y."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='krocze_i'&&$postac['os_x']==0){$mapa_nazwa="plac"; $os_x=29;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='krocze_i'&&$postac['os_x']==30){$mapa_nazwa="krocze_ii"; $os_x=1;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};
if($postac['mapa']=='krocze_ii'&&$postac['os_x']==0){$mapa_nazwa="krocze_i"; $os_x=29;  $wynik=mysql_query("UPDATE postac SET os_x='".$os_x."',mapa='".$mapa_nazwa."' WHERE user='".$postac['user']."';"); $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$_GET['user']."';"));};

if($postac['mapa']=='plac'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/plac.php"); $mapa_nazwa="Ostrogar - Plac Karczemny";};
if($postac['mapa']=='Palac'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/Palac.php"); $mapa_nazwa="Ostrogar - Pa³ac";};
if($postac['mapa']=='Zlota'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/zlota.php"); $mapa_nazwa="Ostrogar - Z³ota";};
if($postac['mapa']=='Srebrna'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/srebrna.php");  $mapa_nazwa="Ostrogar - Srebrna Przystañ";};
if($postac['mapa']=='Poludniowa_i'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/Poludniowa_i.php");  $mapa_nazwa="Ostrogar - Poludniowa I";};
if($postac['mapa']=='Poludniowa_ii'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/Poludniowa_ii.php");  $mapa_nazwa="Ostrogar - Poludniowa II";};
if($postac['mapa']=='krocze_i'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/krocze_i.php");  $mapa_nazwa="Ostrogar - Ch³opskie Krocze I";};
if($postac['mapa']=='krocze_ii'){include("pliki/swiat/mapy/Centralny/Orkus/Ostrogar/krocze_ii.php");  $mapa_nazwa="Ostrogar - Ch³opskie Krocze II";};





?>