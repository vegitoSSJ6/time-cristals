<?
function login(){print'<CENTER><H2>Wprowadz nazwê u¿ytkownika i has³o:</H2><FORM NAME="logowanie" ACTION="index.php" METHOD="POST"><input type="hidden" name="co" value="zaloguj"><TABLE border=1><TR><TD bordercolor=#FFFFFF>U¿ytkownik:</TD><TD bordercolor="#FFFFFF"><INPUT TYPE="text" NAME="user"></TD></TR><TR><TD bordercolor="#FFFFFF">Has³o:</TD><TD bordercolor="#FFFFFF"><INPUT TYPE="password" NAME="haslo"></TD></TR><TR><TD colspan=2><A href="index.php?co=zarejestruj">Zarejestruj Sie!</A></TD></TR><TR><TD COLSPAN="2" ALIGN="center" BORDERCOLOR="#FFFFFF"><INPUT TYPE="submit" VALUE="Zaloguj!!!"></TD></TR></TABLE></FORM></CENTER>';}

function checkPass($user, $pass)
{
  $link=mysql_connect("localhost","root","krasnal");
  $flag=mysql_select_db("krysztaly_czasu");
  if(!$link||!$flag){print"Problem z po³¹czeniem z baz¹ danych."; return false;}

  $query="SELECT PASS FROM USERS WHERE NAME ='".$user."'";
  if(!$result=mysql_query($query)){print"Problem z baz¹ danych. Odrzucone zapytanie."; mysql_close($link); return false;}


  if(!$row=mysql_fetch_row($result)){mysql_close($link); return false;}
  if($row[0]!= $pass){mysql_close($link); return false;}
  else{mysql_close($link); return true;}
}
if(!isSet($_POST["haslo"])||!isSet($_POST["user"])==''){login();}
else if(!isSet($_POST["haslo"])||!isSet($_POST["user"])){log_error();}
else if(checkPass($_POST["user"], $_POST["haslo"])){login();}
else{index1();}


?>

function register_form(){print'<form action="index.php" method="post"><input type="hidden" name="regEnd" value="true">Nazwa <input type="text" name="userName" maxlength="32"><br>Has³o <input type="text" name="userPasswd1" maxlength="8"><br>Powtórz Has³o <input type="text" name="userPasswd2" maxlength="8"><br>Podaj E-Mail <input type="text" name="userEmail" maxlength="64"><br><input type="submit" value="Rejestruj"></form>';}


Plik register.php:
<?php
if($_POST["regEnd"]=="true")
{
   $query=mysql_query("SELECT * FROM users WHERE u_name='$_POST[userName]' ");
   if(!$_POST["userName"] OR !$_POST["userPasswd1"] OR !$_POST["userPasswd2"] OR !$_POST["userEmail"])
   {
           print"Nie wypelniono wszystkich pól";
   }
   elseif($_POST["userPasswd1"]!=$_POST["userPasswd2"])
   {
           print"Podane has³a nie sa takie same";
   }
   elseif(!eregi("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$",$_POST["userEmail"]))
   {
           print"Podany email nie jest prawid³owy";
   }
   elseif(strlen($_POST["userName"])<4 OR strlen($_POST["userPasswd1"])<4)
   {
           print"Nazwa i has³o musz¹ miec przynajmniej 4 znaki";
   }
   elseif(mysql_num_rows($query)==1)
   {
           print"Podana nazwa uzytkownika jest juz zajêta. Wybierz inna";
   }
   else
   {
           $_POST["userPasswd1"]=SHA1($_POST["userPasswd1"]);
           $actCode=str_shuffle("qwertyuiopasdfghjklzxcvbnm1234567890");
           $headers="MIME-Version: 1.0\r\n";
           $headers.="Content-type: text/html; charset=iso-8859-2\r\n";
           $content="<html><head><title>Aktywacja Konta</title</head>
                                           <body>
                                           Aby aktywowaæ konto na stronie XXXX musisz klikn¹æ poni¿szy link aktywuj¹cy:<br>
                                           <a href=\"http://twojastrona.com/www/register.php?active=".$actCode."\"> http://twojastrona.com/www/register.php?active=".$actCode." </a><br>
                                                Dziêkuje admin strony XXXX</body></html>";
                mail($_POST["userEmail"], "Link Aktywacyjny", $content, $headers);
           mysql_query("INSERT INTO users (u_name, u_password, u_email, u_activation_key) VALUES('$_POST[userName]', '$_POST[userPasswd1]', '$_POST[userEmail]', '$actCode')");

 print"Zostales zarejestrowany pomyslnie, jednak ta strona wymaga aktywacji konta przez email. Na podany adres emailowy zostal wyslany klucz aktywacyjny. Email powinien zostac wyslany w ciagu kilku minut, jesli tak sie nie stanie skontaktuj sie z administratorem strony.";
        }
}
elseif($_GET["active"])
{
   mysql_query("UPDATE users SET u_active=1 WHERE u_activation_key='$_GET[active]' ");
   if(mysql_affected_rows()==1)
        {
                 print"Aktywacja ukonczona pomyœlnie. Mo¿esz ju¿ korzystaæ z naszego serwisu.";
         }
         else
         {
                  print"Podano nieistniej¹cy kod aktywacyjny.";
          }
}
else
{
include"form.inc";
}
?>







