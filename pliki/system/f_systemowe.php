<?
 function formularz_r(){include("pliki/system/formularz_r.php");}
 function login(){include("pliki/system/login.php");}
 function log_error(){print"<CENTER><H2>B³êdna nazwa u¿ytkownika lub has³o!</H2></CENTER>";}
 function strona_glowna(){include("pliki/system/strona_glowna.php");}
 function naglowek($tytul){include("pliki/system/naglowek.php");}
 function stopka(){print('</TD</TR></TABLE></BODY></HTML>');}
 function kostka2(){return rand(1, 2);}
 function kostka5(){return rand(1, 5);}
 function kostka10(){$kostka10=rand(1, 10);if($kostka10==10){$kostka10+=rand(1, 10);}; return $kostka10;}
 function kostka50(){return rand(1, 50);}
 function kostka100(){return rand(1, 100);}


?>


