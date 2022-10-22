<?
  $postac=mysql_fetch_assoc(mysql_query("SELECT*FROM postac WHERE user='".$imie."';"));
 $postac['sekundy']=$postac['sekundy']+10;
 if($postac['sekundy']>59){$postac['minuta']=$postac['minuta']+1; $postac['sekundy']=$postac['sekundy']-60;};
 if($postac['minuta']>59){$postac['godzina']=$postac['godzina']+1; $postac['minuta']=$postac['minuta']-60;};
 if($postac['godzina']>23){$postac['dzien']=$postac['dzien']+1; $postac['godzina']=$postac['godzina']-24;};
 if($postac['dzien']>40){$postac['miesiac']=$postac['miesiac']+1; $postac['dzien']=$postac['dzien']-40;};
 if($postac['miesiac']==10&&$postac['dzien']>6){$postac['rok']=$postac['rok']+1; $postac['miesiac']=1; $postac['dzien']=1;};
$wynik=mysql_query("UPDATE postac SET sekundy='".$postac['sekundy']."',minuta='".$postac['minuta']."',godzina='".$postac['godzina']."',dzien='".$postac['dzien']."',miesiac='".$postac['miesiac']."',rok='".$postac['rok']."' WHERE user='".$postac['user']."';");
?>


