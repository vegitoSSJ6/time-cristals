<?
  $kostka=kostka100();
  if($status_spoleczny=="Nizsza Klasa Nizsza"||$status_spoleczny=="Srednia Klasa Nizsza"||$status_spoleczny=="Wyzsza Klasa Nizsza"){
  if($status_spoleczny=="Nizsza Klasa Nizsza"){$kostka-=10; if($kostka<1){$kostka=1;};};
  if($status_spoleczny=="Wyzsza Klasa Nizsza"){$kostka+=10; if($kostka>100){$kostka=100;};};
  if($kostka>0&&$kostka<4){$zawod="Zebrak";};
  if($kostka>3&&$kostka<7){$zawod="Pastuch";};
  if($kostka>6&&$kostka<10){$zawod="Stajenny";};
  if($kostka>9&&$kostka<13){$zawod="Gornik";};
  if($kostka>12&&$kostka<16){$zawod="Goniec";};
  if($kostka>15&&$kostka<19){$zawod="Tragarz";};
  if($kostka>18&&$kostka<22){$zawod="Sluzacy";};
  if($kostka>21&&$kostka<25){$zawod="Rybak";};
  if($kostka>24&&$kostka<28){$zawod="Drwal";};
  if($kostka>27&&$kostka<31){$zawod="Pilot";};
  if($kostka>30&&$kostka<34){$zawod="Plywak";};
  if($kostka>33&&$kostka<37){$zawod="Marynarz";};
  if($kostka>36&&$kostka<40){$zawod="Nurek";};
  if($kostka>39&&$kostka<43){$zawod="Flisak";};
  if($kostka>42&&$kostka<46){$zawod="Murarz";};
  if($kostka>45&&$kostka<49){$zawod="Tkacz";};
  if($kostka>48&&$kostka<52){$zawod="Rzezbiarz";};
  if($kostka>51&&$kostka<55){$zawod="Krawiec";};
  if($kostka>54&&$kostka<58){$zawod="Pszczelarz";};
  if($kostka>57&&$kostka<61){$zawod="Grabarz";};
  if($kostka>60&&$kostka<64){$zawod="Ciesla";};
  if($kostka>63&&$kostka<67){$zawod="Ogrodnik";};
  if($kostka>66&&$kostka<70){$zawod="Zielarz";};
  if($kostka>69&&$kostka<73){$zawod="Garncarz";};
  if($kostka>72&&$kostka<76){$zawod="Kucharz";};
  if($kostka>75&&$kostka<79){$zawod="Hodowca";};
  if($kostka>78&&$kostka<82){$zawod="Woznica";};
  if($kostka>81&&$kostka<85){$zawod="Rolnik";};
  if($kostka>84&&$kostka<88){$zawod="Piekarz";};
  if($kostka>87&&$kostka<91){$zawod="Garbarz";};
  if($kostka>90&&$kostka<94){$zawod="Kowal";};
  if($kostka>93&&$kostka<97){$zawod="Mlynarz";};
  if($kostka>96){$zawod="Stolarz";};};
  if($status_spoleczny=="Nizsza Klasa Srednia"||$status_spoleczny=="Srednia Klasa Srednia"||$status_spoleczny=="Wyzsza Klasa Srednia"){
  if($status_spoleczny=="Nizsza Klasa Srednia"){$kostka-=10; if($kostka<1){$kostka=1;};};
  if($status_spoleczny=="Wyzsza Klasa Srednia"){$kostka+=10; if($kostka>100){$kostka=100;};};
  if($kostka>0&&$kostka<4){$zawod="Zebrak";};
  if($kostka>3&&$kostka<7){$zawod="Goniec";};
  if($kostka>6&&$kostka<10){$zawod="Stajenny";};
  if($kostka>9&&$kostka<13){$zawod="Gornik";};
  if($kostka>12&&$kostka<16){$zawod="Marynarz";};
  if($kostka>15&&$kostka<19){$zawod="Tragarz";};
  if($kostka>18&&$kostka<22){$zawod="Sluzacy";};
  if($kostka>21&&$kostka<25){$zawod="Kucharz";};
  if($kostka>24&&$kostka<28){$zawod="Dozorca";};
  if($kostka>27&&$kostka<31){$zawod="Krawiec";};
  if($kostka>30&&$kostka<34){$zawod="Treser";};
  if($kostka>33&&$kostka<37){$zawod="Fryzjer";};
  if($kostka>36&&$kostka<40){$zawod="Ptasznik";};
  if($kostka>39&&$kostka<43){$zawod="Woznica";};
  if($kostka>42&&$kostka<46){$zawod="Murarz";};
  if($kostka>45&&$kostka<49){$zawod="Tkacz";};
  if($kostka>48&&$kostka<52){$zawod="Rzezbiarz";};
  if($kostka>51&&$kostka<55){$zawod="Garbarz";};
  if($kostka>54&&$kostka<58){$zawod="Bosman";};
  if($kostka>57&&$kostka<61){$zawod="Grabarz";};
  if($kostka>60&&$kostka<64){$zawod="Piekarz";};
  if($kostka>63&&$kostka<67){$zawod="Kowal";};
  if($kostka>66&&$kostka<70){$zawod="Stolarz";};
  if($kostka>69&&$kostka<73){$zawod="Garncarz";};
  if($kostka>72&&$kostka<76){$zawod="Skryba";};
  if($kostka>75&&$kostka<79){$zawod="Kat";};
  if($kostka>78&&$kostka<82){$zawod="Tlumacz";};
  if($kostka>81&&$kostka<85){$zawod="Architekt";};
  if($kostka>84&&$kostka<88){$zawod="Mineralog";};
  if($kostka>87&&$kostka<91){$zawod="Platnerz";};
  if($kostka>90&&$kostka<94){$zawod="Zlotnik";};
  if($kostka>93&&$kostka<97){$zawod="Jubiler";};
  if($kostka>96){$zawod="Skryba";};};
  if($status_spoleczny=="Nizsza Klasa Wyzsza"||$status_spoleczny=="Srednia Klasa Wyzsza"||$status_spoleczny=="Wyzsza Klasa Wyzsza"||$status_spoleczny=="Elita Wladzy"){
  if($status_spoleczny=="Nizsza Klasa Wyzsza"){$kostka-=10; if($kostka<1){$kostka=1;};};
  if($status_spoleczny=="Wyzsza Klasa Wyzsza"){$kostka+=10; if($kostka>100){$kostka=100;};};
  if($status_spoleczny=="Elita Wladzy"){$kostka+=20; if($kostka>100){$kostka=100;};};
  if($kostka>0&&$kostka<4){$zawod="Poborca";};
  if($kostka>3&&$kostka<7){$zawod="Marynarz";};
  if($kostka>6&&$kostka<10){$zawod="Bosman";};
  if($kostka>9&&$kostka<13){$zawod="Skryba";};
  if($kostka>12&&$kostka<16){$zawod="Kucharz";};
  if($kostka>15&&$kostka<19){$zawod="Zbrojmistrz";};
  if($kostka>18&&$kostka<22){$zawod="Platnerz";};
  if($kostka>21&&$kostka<25){$zawod="Malarz";};
  if($kostka>24&&$kostka<28){$zawod="Zlotnik";};
  if($kostka>27&&$kostka<31){$zawod="Bibliotekarz";};
  if($kostka>30&&$kostka<34){$zawod="Treser";};
  if($kostka>33&&$kostka<37){$zawod="Jezdziec";};
  if($kostka>36&&$kostka<40){$zawod="Sokolnik";};
  if($kostka>39&&$kostka<43){$zawod="Woznica Rydwanow";};
  if($kostka>42&&$kostka<46){$zawod="Jubiler";};
  if($kostka>45&&$kostka<49){$zawod="Tkacz Gobelinow";};
  if($kostka>48&&$kostka<52){$zawod="Rzezbiarz";};
  if($kostka>51&&$kostka<55){$zawod="Tancerz";};
  if($kostka>54&&$kostka<58){$zawod="Tlumacz";};
  if($kostka>57&&$kostka<61){$zawod="Architekt";};
  if($kostka>60&&$kostka<64){$zawod="Mineralog";};
  if($kostka>63&&$kostka<67){$zawod="Spiewak";};
  if($kostka>66&&$kostka<70){$zawod="Aktor";};
  if($kostka>69&&$kostka<73){$zawod="Poeta";};
  if($kostka>72&&$kostka<76){$zawod="Pisarz";};
  if($kostka>75&&$kostka<79){$zawod="Szkutnik";};
  if($kostka>78&&$kostka<82){$zawod="Szuler";};
  if($kostka>81&&$kostka<85){$zawod="Mysliwy";};
  if($kostka>84&&$kostka<88){$zawod="Religioznawca";};
  if($kostka>87&&$kostka<91){$zawod="Kolekcjoner";};
  if($kostka>90&&$kostka<94){$zawod="Historyk";};
  if($kostka>93&&$kostka<97){$zawod="Akademik";};
  if($kostka>96){$zawod="Geograf";};};
?>

