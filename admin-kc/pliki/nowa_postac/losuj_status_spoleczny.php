<?
 $losuj=kostka100(); 
 if($losuj>0&&$losuj<6){$status_spoleczny="Nizsza Klasa Nizsza";}
  elseif($losuj>5&&$losuj<11){$status_spoleczny="Srednia Klasa Nizsza";}
  elseif($losuj>10&&$losuj<16){$status_spoleczny="Wyzsza Klasa Nizsza";}
  elseif($losuj>15&&$losuj<36){$status_spoleczny="Nizsza Klasa Srednia";}
  elseif($losuj>35&&$losuj<56){$status_spoleczny="Srednia Klasa Srednia";}
  elseif($losuj>55&&$losuj<76){$status_spoleczny="Wyzsza Klasa Srednia";}
  elseif($losuj>75&&$losuj<86){$status_spoleczny="Nizsza Klasa Wyzsza";}
  elseif($losuj>85&&$losuj<91){$status_spoleczny="Srednia Klasa Wyzsza";}
  elseif($losuj>90&&$losuj<96){$status_spoleczny="Wyzsza Klasa Wyzsza";}
  else{$status_spoleczny="Elita Wladzy";};

?>


