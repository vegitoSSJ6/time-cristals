<?
print'<CENTER><H2>Zaloguj Sie:</H2>
      <FORM NAME="logowanie" ACTION="index.php" METHOD="GET">
      <input type="hidden" name="co" value="zaloguj">
      <TABLE border=1><TR><TD>U¿ytkownik:</TD>
                          <TD><INPUT TYPE="text" NAME="user"></TD></TR>
                      <TR><TD>Has³o:</TD>
                          <TD><INPUT TYPE="password" NAME="haslo"></TD></TR>
                      <TR><TD colspan=2><A href="index.php?co=zarejestruj">Zarejestruj Sie!</A></TD></TR>
                      <TR><TD COLSPAN="2" ALIGN="center"><INPUT TYPE="submit" VALUE="Zaloguj!!!"></TD></TR>
      </TABLE></FORM></CENTER>';

?>